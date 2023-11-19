<?php
    class conDB{
        function connectDB(& $conn){
            $conn = mysqli_connect("localhost","root","","mydayhandbook");
            mysqli_set_charset($conn, "utf8");
            if ($conn){
                return mysqli_select_db($conn, "mydayhandbook");
            } else {
                return false;
            }
        }
        function disconnect($conn){
            mysqli_close($conn);
        }
    }
?>