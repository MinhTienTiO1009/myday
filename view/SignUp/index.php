<style>
    .signupForm{
        /* align-items: center;
        display: grid;
        justify-content: space-around; */
        /* background-color: ; */


    }
    .signupForm input{
        width: 80%;
        height: 5%;
        line-height: 10px;
        margin: 20px;
        border-radius: 10px;
        border: 0.2px solid gray;
    }
    .signupForm div{
        display: flex;
        justify-content: center;
        width: 80%;
    }
    div .btn{
        width: 40%;
        height: 40px;
    }
</style>
<form class="signupForm" action="#" method="post">
    <input type="text" class="info" name="ten" placeholder="Vui lòng nhập tên cho lần đăng nhập tới">
    <input type="text" class="info" name="mail" placeholder="Nhập email của ban">
    <input type="text" class="info" name="phone" placeholder="Nhập số điện thoại của bạn">
    <input type="text" class="info" name="pass" placeholder="Hãy tạo mật khẩu">
    <input type="text" class="info" name="retypedPass" placeholder="Xác minh mật khẩu">
    <a href="index.php?login">Đăng nhập</a>
    <div>
    <input type="reset" class="btn">
    <input type="submit" class="btn" name="submit">

    </div>
</form>
<?php

if (isset($_SESSION['username']) && $_SESSION['login'] == true) {
    header("Location: index.php?sukien");
}

    if (isset($_REQUEST['submit'])) {
        $ten = $_REQUEST['ten'];
        $mail = $_REQUEST['mail'];
        $phone = $_REQUEST['phone'];
        $pass = $_REQUEST['pass'];
        $retypedPass = $_REQUEST['retypedPass'];
        include_once('controller/cSignup.php');
        // echo ($ten.$mail.$phone.$pass.$retypedPass);
        $kq=signup($ten,$mail,$phone,$pass);
        if(!$kq){
            echo "<script>alert('Không thể tạo tài khoản');</script>";
        }else{
            header("Location: index.php?login");
        }
    }
?>