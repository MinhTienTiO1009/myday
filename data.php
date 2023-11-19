<?php
    include_once('controller/cCamXuc.php');
    // include_once('view/BieuDoCamXuc/DropDownMonth.php');
    // $month = getMonth();
<<<<<<< HEAD
    $data = getCamXucByMonth(11);
=======
    if (isset($_REQUEST['btnfilter'])) {
        $thang = $_REQUEST['thang'];
        echo $thang;
    }
    $th = 11;
    $data = getCamXucByMonth($th);
>>>>>>> 91ec294f8259857c1a29b20ef4170b796fab736d
    $array = array();
    while ($row = mysqli_fetch_assoc($data)) {
        $array[] = $row;
    }
    echo json_encode($array);
<<<<<<< HEAD
    var_dump(json_encode($array));
=======
    // header("Location: index.php?motThangNhinLai");
>>>>>>> 91ec294f8259857c1a29b20ef4170b796fab736d
?>