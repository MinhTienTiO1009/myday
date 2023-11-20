<?php
    if (!isset($_SESSION['username']) || $_SESSION['login'] !== true) {
        // Nếu chưa đăng nhập, chuyển hướng đến trang đăng nhập
        header("Location: index.php?login");
    }

// include ('bangSuKien.php');
echo "hello ";
echo $_SESSION['username'];
?>