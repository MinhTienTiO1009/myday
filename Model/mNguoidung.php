<?php
include_once('ketnoi.php'); 
    //Cập nhật thông tin cá nhân
    function uTT($username,$TenND,$Pass,$SDT,$Email, $DiaChi, $NgaySinh){
        $object = new conDB();
        $connection = $object->connectDB($conn);
            $p = new conDB();
            if ($connection) {
                $string = "update nguoidung ";
                $string .= "set tenNguoiDung = '$TenND' ";
                $string .= ", matKhau = '$Pass' ";
                $string .= ", soDT = '$SDT' ";
                $string .= ", email = '$Email' ";
                $string .= ", diaChi = '$DiaChi' ";
                $string .= ", ngaySinh = '$NgaySinh'";
                $string .= "where username = '$username'";
                $ThongTin = mysqli_query($conn,$string);
                $p->disconnectDB($conn);
                return $ThongTin;
            } else {
                return false;
            }
        }
        //Cập nhật thời gian nhắc nhở
        function uTG($username,$ThoiGian,$GhiChu){
            $object = new conDB();
            $connection = $object->connectDB($conn);
                $p = new conDB();
                if ($connection) {
                    $string = "update thoigiannhacnho ";
                    $string .= "set thoiGian = '$ThoiGian'";
                    $string .= ", ghiChu = '$GhiChu'";
                    $string .= "where username = '$username'";
                    $ThoiGian = mysqli_query($conn,$string);
                    $p->disconnectDB($conn);
                    return $ThoiGian;
                } else {
                    return false;
                }
    
            }
