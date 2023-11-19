<?php
    class ConnectDataBase{
        function connect(& $conn){
            $conn = mysqli_connect("localhost","root","","mydayhandbook");
            // mysql_set_charset("utf8");
            if($conn)
                return mysqli_select_db($conn,"mydayhandbook");
            return false;
        }
        function disconnect($conn){
            mysqli_close($conn);
        }
    }
?>