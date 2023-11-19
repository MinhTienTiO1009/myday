<?php
<<<<<<< HEAD
    class conDB{
        function connectDB(& $conn){
            $conn = mysqli_connect("localhost","root","","mydayhandbook");
            mysqli_set_charset($conn, "utf8");
            if ($conn){
                return mysqli_select_db($conn, "mydayhandbook");
            } else {
                return false;
            }
=======
    class ConnectDataBase{
        function connect(& $conn){
            $conn = mysqli_connect("localhost","root","","mydayhandbook");
            // mysql_set_charset("utf8");
            if($conn)
                return mysqli_select_db($conn,"mydayhandbook");
            return false;
>>>>>>> 9411c6b024396d8f3cc83c3cb644dff0f0802520
        }
        function disconnect($conn){
            mysqli_close($conn);
        }
    }
?>