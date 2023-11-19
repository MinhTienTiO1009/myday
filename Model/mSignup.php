<?php
    include_once 'ketnoi.php';
    function insertUser($ten,$mail,$phone,$pass){
        $object = new conDB();
        $connection = $object->connectDB($conn);
        if ($connection) {
            // $queryCommand = "INSERT INTO NGUOIDUNG(USERNAME, EMAIL, MATKHAU, SODT)";
            // $queryCommand .= "values(N'".$ten."',".$mail.",N'".$pass."',N'".$phone.")";
            $queryCommand="INSERT INTO `nguoidung` (`username`, `tenNguoiDung`, `email`, `matKhau`, `soDT`, `gioitinh`, `ngaySinh`, `diaChi`) 
            VALUES ('$ten', '$ten', '$mail', '$pass', '$phone', '0', NULL, NULL)";
            $data = mysqli_query($conn,$queryCommand);
            $object->disconnectDB($conn);
            return $data;
        } else {
            return false;
        }
    }
?>