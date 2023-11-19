<?php
    include_once 'Model/mCamXuc.php';
    function getCamXucByMonth($month){
        return selectCamXucByMonth('nguyenvana', 11);
    }
?>