<?php
    include_once("Model/mDieuBietOn.php");
    class controlDBO{
        // lấy tất cả điều biết ơn theo tháng năm
        function getAllDBOByMonth($month, $year){
            $p = new modelDBO(); 
            $a = $_SESSION['username'];
            $tblDBO = $p->SelectAllDBOByMonth($month, $year, $a); //trả về table
            return $tblDBO;
        }
        function addDBO($noidung, $thoigian, $username){
            $p = new modelDBO();
            $kq = $p->insertDBO($noidung, $thoigian, $username);
            if ($kq !== false) {
                return $kq;
            } else {
                return false;
            }
        }

        function getAllNoiDungByMonth($month, $year) {
            $p = new modelDBO();
            $tblDBO = $p->selectNoiDungByMonth($month, $year);
            return $tblDBO;
        }
    }
?>