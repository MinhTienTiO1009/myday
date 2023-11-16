<?php
include 'connect.php';
    $email_error = $success_message = "";

    if (isset($_POST['submit'])) {
        $email = $_POST['email'];

        $sql = "SELECT * FROM nguoidung WHERE email = '$email'";
        $query = mysqli_query($conn, $sql);
        $data = mysqli_fetch_assoc($query);
        $checkemail = mysqli_num_rows($query);
        if (empty($email)) {
            $email_error = "Vui lòng nhập địa chỉ email";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $email_error = "Định dạng email không hợp lệ";
        } if($checkemail==1){
            $checkemail = ($email == $data['email'])? True : false;

            if (!$checkemail) {
                $email_error = "Email chưa đăng ký";
            } else {
                echo $new_password = substr( md5(rand(0, 999999)), 0, 8);
                $data['matKhau'] = $new_password;
                $success_message = "Hướng dẫn đặt lại mật khẩu đã được gửi đến địa chỉ email của bạn.";
            }
        }
    }

    function check($email, $conn)
{
    
    if ($result && mysqli_num_rows($result) > 0) {
        return true; // Email exists in the database
    } else {
        return false; // Email does not exist
    }
}

    ?>
