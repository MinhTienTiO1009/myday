<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Quên Mật Khẩu</title>
</head>

<body>
<?php
    $conn = mysqli_connect("localhost", "root", "", "mydayhandbook");
    mysqli_set_charset($conn,'utf8');
$email_error = $success_message = "";

if (isset($_POST['submit'])) {
    $email = $_POST['email'];

    if (empty($email)) {
        $email_error = "Vui lòng nhập địa chỉ email";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email_error = "Định dạng email không hợp lệ";
    } else {
        $sql = "SELECT * FROM nguoidung WHERE email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            $user = $result->fetch_assoc();
            $new_password = substr(md5(rand(0, 999999)), 0, 8); // Tạo mật khẩu mới với md5

            // Cập nhật mật khẩu người dùng trong cơ sở dữ liệu
            $update_sql = "UPDATE nguoidung SET matKhau = '" . $new_password . "' WHERE email = ?";
            $update_stmt = $conn->prepare($update_sql);
            $update_stmt->bind_param("s", $email);
            $update_stmt->execute();

            // Gửi mật khẩu mới cho người dùng 
            send_mail($email, $new_password);
            $success_message = "Hướng dẫn đặt lại mật khẩu đã được gửi đến địa chỉ email của bạn.";
        } else {
            $email_error = "Email chưa đăng ký";
        }
    }
}
?>
<?php
function send_mail($email, $new_password){
    // require __DIR__ . '/../assets/PHPMailer-master/src/PHPMailer.php';
    // require __DIR__ . '/../assets/PHPMailer-master/src/SMTP.php';
    // require __DIR__ . '/../assets/PHPMailer-master/src/Exception.php';

    // require_once('/../assets/PHPMailer-master/src/PHPMailer.php');
    // require_once('/../assets/PHPMailer-master/src/SMTP.php');
    // require_once('/../assets/PHPMailer-master/src/Exception.php');

    require_once(__DIR__ . '/../../assets/PHPMailer-master/src/PHPMailer.php');
    require_once(__DIR__ . '/../../assets/PHPMailer-master/src/SMTP.php');
    require_once(__DIR__ . '/../../assets/PHPMailer-master/src/Exception.php');


    
    $mail = new PHPMailer\PHPMailer\PHPMailer(true);//true:enables exceptions
    try {
        $mail->SMTPDebug = 0; //0,1,2: chế độ debug
        $mail->isSMTP();  
        $mail->CharSet  = "utf-8";
        $mail->Host = 'smtp.gmail.com';  //SMTP servers
        $mail->SMTPAuth = true; // Enable authentication
        $mail->Username = 'duchaib838@gmail.com'; // SMTP username
        $mail->Password = 'qnma dlqu lxij flyb';   // SMTP password
        $mail->SMTPSecure = 'ssl';  // encryption TLS/SSL 
        $mail->Port = 465;  // port to connect to                
        $mail->setFrom('duchaib838@gmail.com', 'Quản trị hệ thống' ); 
        $mail->addAddress($email); 
        $mail->isHTML(true);  // Set email format to HTML
        $mail->Subject = 'Thư cấp lại mật khẩu';
        $noidungthu = "<pre>
        Chào người dùng,
        Chúng tôi nhận được yêu cầu cấp lại mật khẩu từ bạn và đã thực hiện việc đổi mật khẩu cho tài khoản của bạn trong hệ thống.
        Mật khẩu mới của bạn là: {$new_password}
        Vui lòng đăng nhập bằng mật khẩu mới này và đảm bảo rằng bạn thay đổi mật khẩu ngay sau khi đăng nhập thành công để bảo đảm tính bảo mật cho tài khoản của mình.
        
        Nếu bạn có bất kỳ câu hỏi hoặc cần sự hỗ trợ nào khác, đừng ngần ngại liên hệ với chúng tôi.
        
        Trân trọng,
        Quản trị viên
        </pre>"; 
        $mail->Body = $noidungthu;
        $mail->smtpConnect( array(
            "ssl" => array(
                "verify_peer" => false,
                "verify_peer_name" => false,
                "allow_self_signed" => true
            )
        ));
        $mail->send();
        // echo 'Đã gửi mail xong';
    } catch (Exception $e) {
        // echo 'Error: '. $mail->ErrorInfo;
        // var_dump('$mail->ErrorInfo') ;
        // var_dump($mail->send());
        $email_error = "Gửi mail thất bại";

    }
}
?>
    <form class="loginForm content-mid" action="forgot_password.php" method="post">
        <div class="container">
            <h1>Quên Mật Khẩu</h1>
            <p>Nhập địa chỉ email của bạn để đặt lại mật khẩu.</p>
            <hr>

            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Nhập Email" name="email" id="email">
            <?php if (!empty($email_error)) : ?>
                <div class="error-message"><?php echo $email_error; ?></div>
            <?php endif; ?>

            <?php if (!empty($success_message)) : ?>
                <div class="success-message"><?php echo $success_message; ?></div>
            <?php endif; ?>

            <hr>
            <button type="submit" class="registerbtn" name="submit">Gửi Email Khôi Phục</button>
            <div class="container signin">
        <p>Quay lại <a href="../../index.php?login">Đăng Nhập</a>.</p>
    </div>
        </div>
    </form>

</body>

</html>
