<?php
    include_once("Model/mDieuBietOn.php");
    class controlDBO{
        // lấy tất cả điều biết ơn theo tháng năm
        function getAllDBOByMonth($month, $year){
            $p = new modelDBO(); 
            $tblDBO = $p->SelectAllDBOByMonth($month, $year); //trả về table
            return $tblDBO;
        }
        function addDBO($noidung, $username){
            $p = new modelDBO();
            $kq = $p->insertDBO($noidung, $username);
            if ($kq !== false) {
                return $kq;
            } else {
                return false;
            }
        }
    }
?>