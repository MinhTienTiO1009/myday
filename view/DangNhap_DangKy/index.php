<h1>Trang Chủ</h1>
<?php
session_start();

if(isset($_SESSION['nguoidung']) && isset($_SESSION['matKhau']))
{
    echo 'Chao mung';
    header('Location: index.php');
}
else
{
    header('location', 'login.php');
}
?>