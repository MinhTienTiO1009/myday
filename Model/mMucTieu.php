<?php
    // session_start();
?>
<?php
    include_once 'ketnoi.php';
    function InsertCD($ten, $Chude){
        $object = new conDB();
        $connection = $object->connectDB($conn);
        if ($connection) {
            $queryCommand="Insert into muctieuthang values('".getdate()['year'].'-'. getdate()['mon']."', '$Chude', '$ten')";
            $data = mysqli_query($conn,$queryCommand);
            $object->disconnect($conn);
            return $data;
        } else {
            return false;
        }
    }
    function InsertMT($ten,$TenMT1,$TenMT2, $TenMT3){
        $object = new conDB();
        $connection = $object->connectDB($conn);
        if ($connection) {
            $queryCommand="Insert into chitietmuctieu(ThangNam, TenMucTieu, TrangThai, GhiChu, username) 
            values('".getdate()['year'].'-'. getdate()['mon']."', '$TenMT1', '', '', '$ten')";
            $queryCommand .= ",('".getdate()['year'].'-'. getdate()['mon']."', '$TenMT2', '', '', '$ten')";
            $queryCommand .= ",('".getdate()['year'].'-'. getdate()['mon']."', '$TenMT3', '', '', '$ten')";
            // var_dump($connection);
            $data = mysqli_query($conn,$queryCommand);
            $object->disconnect($conn);
            return $data;
        } else {
            return false;
        }
    }
?>