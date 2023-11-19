<?php
    // session_start();
?>
<?php
    include_once 'ketnoi.php';
    function selectUser($ten,$pass){
        $object = new conDB();
        $connection = $object->connectDB($conn);
        if ($connection) {
            $queryCommand="SELECT * FROM NGUOIDUNG WHERE USERNAME = '$ten' AND MATKHAU=$pass";
            $data = mysqli_query($conn,$queryCommand);
            $object->disconnectDB($conn);
            return $data;
        } else {
            return false;
        }
    }
?>