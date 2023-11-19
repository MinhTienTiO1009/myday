<?php
    include_once('controller/cCamXuc.php');
    include_once('view/BieuDoCamXuc/DropDownMonth.php');
    $month = getMonth();
    $data = getCamXucByMonth($month);
    $array = array();
    while ($row = mysqli_fetch_assoc($data)) {
        $array[] = $row;
    }
    echo json_encode($array);
?>