<?php
    // include_once 'view/Signup/index.php';
    $display = 0;
    if(array_key_exists('index.php', $_GET)) {
        $display = 0;
    }elseif(array_key_exists('menuNgayCuaToi', $_GET)) {
        $display = 1;
    }elseif(array_key_exists('sukien', $_GET)){
        $display = 2;
    }elseif(array_key_exists('motThangNhinLai', $_GET)){
        $display = 3;
    }elseif(array_key_exists('ThoiQuen', $_GET)){
        $display = 4 ;
    }elseif(array_key_exists('login', $_GET)){
        $display = 5 ;
    }

    switch ($display) {
        case 0:
            // include_once("view/Sukien/index.php");
            include_once 'view/Signup/index.php';
            break;
        case 1:
            include_once("view/NgayCuaToi/content-ngaycuatoi.php");
            break;
        case 2:
            include_once("view/SuKien/index.php");
            break;
        case 3:
            include_once("view/BieuDoCamXuc/index.php");
            break;
        case 4:
            include_once("view/ThoiQuen/index.php");
            break;
        case 5:
            include_once("view/Login/index.php");
            break;
        
        default:
            echo "page not found 404!";
            break;        
    }
    
?>