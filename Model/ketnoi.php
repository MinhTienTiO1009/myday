 
<?php
    class conDB{
        function connectDB(& $conn){
            $conn = mysqli_connect("localhost","phanhaitrieu","Trieuphan37@",'mydayhandbook');
            mysqli_set_charset($conn, "utf8");
            if ($conn){
                return mysqli_select_db($conn, "mydayhandbook");
            } else {
                return false;
            }
        }

        function disconnectDB($conn){
            mysqli_close($conn);
        }
        
    }
?>