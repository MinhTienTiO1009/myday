<?php
    include_once 'Model/mSignup.php';
    function signup($ten,$mail,$phone,$pass){
        return insertUser($ten,$mail,$phone,$pass);
    }
?>