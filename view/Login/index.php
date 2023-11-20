<form class="loginForm" action="#" method="post">
    <input type="text" class="info" name="ten" placeholder="Vui lòng nhập tên đăng nhập">
    <input type="text" class="info" name="pass" placeholder="Nhập mật khẩu">
    <a href="index.php">Bạn chưa có tài khoản</a>
    <div>
    <input type="reset" class="btn" value="reset">
    <input type="submit" class="btn" name="submit" value="submit">

    </div>
</form>
<style>
    .loginForm{
        /* align-items: center;
        display: grid;
        justify-content: space-around; */
        /* background-color: ; */


    }
    .loginForm input{
        width: 80%;
        height: 5%;
        line-height: 10px;
        margin: 20px;
        border-radius: 10px;
        border: 0.2px solid gray;
    }
    .loginForm div{
        display: flex;
        justify-content: center;
        width: 80%;
    }
    div .btn{
        width: 40%;
        height: 40px;
    }
</style>
<?php

    if (isset($_SESSION['username']) && $_SESSION['login'] == true) {
        header("Location: index.php?sukien");
    }

    if (isset($_REQUEST['submit'])) {
        $ten = $_REQUEST['ten'];
        $pass = $_REQUEST['pass'];
        include_once 'controller/cLogin.php';
        $kq=login($ten,$pass);
        if(!$kq){
            echo "<script>alert('Tài khoản không tồn tại');</script>";
        }else{
            echo header("Location: index.php?sukien");
            while ($row = mysqli_fetch_assoc($kq)) {
                $_SESSION['username'] = $row['username'];
                $_SESSION['login'] = true;
            }
        }
    }
?>