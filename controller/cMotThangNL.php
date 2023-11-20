<?php
    include_once("Model/mMotThangNL.php");
    class controlMTNL{
        // lấy tất cả điều biết ơn theo tháng năm
        function getAllMTNLByMonth($month, $year){
            $p = new modelMTNL(); 
            $tblMTNL = $p->SelectAllMTNLByMonth($month, $year); //trả về table
            return $tblMTNL;
        }
        function addMTNL($username, $than, $tam, $tri) {
            $p = new modelMTNL();
            $kq = $p->insertMTNL($username, $than, $tam, $tri);
        
            if ($kq !== false) {
                return $kq;
            } else {
                return false;
            }
        }
    }
?>