<?php
    include_once('ketnoi.php');
    function selectCamXucByMonth($username, $month){
        $object = new conDB();
        $connection = $object->connectDB($conn);
        if ($connection) {
            $queryCommand = 'SELECT Day(ThoiGian) as ThoiGian, TrangThai FROM CAMXUC
                            WHERE USERNAME = "'.$username.'" and month(thoigian) = '.$month;
            $data = mysqli_query($conn,$queryCommand);
            $object->disconnect($conn);
            return $data;
        } else {
            return false;
        }
        
    }
?>