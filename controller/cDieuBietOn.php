<?php
    include_once("Model/mDieuBietOn.php");
    class controlDBO{
        // lấy tất cả điều biết ơn theo tháng năm
        function getAllDBOByMonth($month, $year){
            $p = new modelDBO(); 
            $tblDBO = $p->SelectAllDBOByMonth($month, $year); //trả về table
            return $tblDBO;
        }
        function addDBO($noidung, $thoigian, $username){
            $p = new modelDBO();
            $insert = $p->insertDBO($noidung, $thoigian, $username);
            return $insert;
        }

        function getAllNoiDungByMonth($month, $year) {
            $p = new modelDBO();
            $tblDBO = $p->selectNoiDungByMonth($month, $year);
            return $tblDBO;
        }
    }
?>