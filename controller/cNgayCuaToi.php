<?php
include_once("./Model/mNgayCuaToi.php");

class controlNgayCuaToi
{

    function getAllNgayCuaToi()
    {
        $modelNCT = new modelNgayCuaToi();
        $tblNgayCuaToi = $modelNCT->selectAllWorkName();
        return $tblNgayCuaToi;
    }


    function addWork($WorkArray, $timeLine, $takeNote)
    {

        $modelNCT = new modelNgayCuaToi();
        $tasks = [];

        for ($i = 1; $i <= 6; $i++) {
            if (!empty($_REQUEST[$WorkArray . $i])) {
                $tasks[] = $_REQUEST[$WorkArray . $i];
            }
        }

        foreach ($tasks as $taskWork) {
            $result = $modelNCT->insertWork($taskWork, $timeLine, $takeNote);
        }

        if ($result) {
            return 1;
        } else {
            return 0; // khong insert duoc
        }
    }

    function getValue($nameInput)
    {
        $selectedId = 0; // Khởi tạo ID với giá trị mặc định là 0

        for ($i = 1; $i <= 5; $i++) {
            if ($_POST[$nameInput . $i] == "1") {
                $selectedId = $i;

                break;
            } else {
                $selectedId = 0;
            }
        }
        return $selectedId;
    }

    function getCountChecked($checked)
    {
        $checkedCount = 0; // Biến đếm số lượng checkbox được check

        if (isset($_POST[$checked])) { // Kiểm tra xem có checkbox nào được check không
            foreach ($_POST[$checked] as $checkbox) {
                $checkedCount++; // Tăng biến đếm với mỗi checkbox được check
            }
        }
        return $checkedCount;
    }

    function addWorkMyDay($valueEmoji, $valueWater, $checkWorkCount, $note, $timeNow, $userName)
    {
        // define 
        $modelNCT = new modelNgayCuaToi();
        $result = $modelNCT->insertWorkMyDay($timeNow, $valueWater, $checkWorkCount, $valueEmoji, $note, $userName);
        if ($result) {
            return 1;
        } else {
            return 0; // khong insert duoc
        }
    }
}