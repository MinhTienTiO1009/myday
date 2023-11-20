<?php
    // session_start();
?>
<?php
    include_once 'ketnoi.php';
    function selectUser($ten){
        $object = new conDB();
        $connection = $object->connectDB($conn);
        if ($connection) {
            $queryCommand="SELECT * FROM NGUOIDUNG WHERE USERNAME = '$ten'";
            $data = mysqli_query($conn,$queryCommand);
            $object->disconnectDB($conn);
            return $data;
        } else {
            return false;
        }
    }
    
    function selectTime($ten){
        $object = new conDB();
        $connection = $object->connectDB($conn);
        if ($connection) {
            $queryCommand="SELECT * FROM THOIGIANNHACNHO WHERE USERNAME = '$ten'";
            $data = mysqli_query($conn,$queryCommand);
            $object->disconnectDB($conn);
            return $data;
        } else {
            return false;
        }
    }
?>