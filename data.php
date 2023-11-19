<?php
session_start();
    include_once('controller/cCamXuc.php');
    // include_once('view/BieuDoCamXuc/DropDownMonth.php');
    // $month = getMonth();
    if (isset($_REQUEST['btnfilter'])) {
        $thang = $_REQUEST['thang'];
        echo $thang;
        echo $_SESSION['username'];

    }
    $th = 11;

    $data = getCamXucByMonth($_SESSION['username'],$th);
    $array = array();
    while ($row = mysqli_fetch_assoc($data)) {
        $array[] = $row;
    }
    echo json_encode($array);
    // header("Location: index.php?motThangNhinLai");
?>