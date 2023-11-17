<?php   
    include_once("./controller/cNgayCuaToi.php");
    $cNgayCuaToi = new controlNgayCuaToi();
    //start page
    
    if (array_key_exists('menuNgayCuaToi', $_GET)) {
        // "Biến menuNgayCuaToi tồn tại trong URL.";
        $tblNgayCuaToi = $cNgayCuaToi -> getAllNgayCuaToi();
        $display = 1;
    }elseif(array_key_exists('dieuToiBietOn', $_GET)){
        $display = 2;
    }
    elseif(array_key_exists('trangChu', $_GET)) {
        $display = 0;
    }

    if($display == 0) {
        include_once("Sukien/index.php");
    }elseif ($display == 1){
        include_once("NgayCuaToi/content-ngaycuatoi.php");
    }
    else {
        
        echo "error 404!";
    }

    // if($tblNgayCuaToi){
    //     if(mysqli_num_rows($tblNgayCuaToi) > 0){
    //         $dem = 0;
    //         // create table
            
    //         echo "<table style='width: 100%;'>";

    //         while ($row = mysqli_fetch_assoc($tblNgayCuaToi)){
    //             if($dem == 0){
    //                 echo "<tr>";
    //             }
    //             // $image = $row['BookImage'];

    //             // echo "<img src='image/$image' alt='$image' />";
    //             echo "<td style='width: 25%; height: 100px'>";
    //             // echo "<img width='200px' height='200px'  src='image/$image'  />";
    //             echo "<br>".$row['maCongViec']."<br>".$row['tenCongViec']."<br>".$row['thoiGianThucHien ']."<br>".$row['ghichu']."<br>"."</td>";
    //             $dem ++;
    //             if ($dem % 4 == 0){
    //                 echo "</tr>";
    //                 $dem = 0;
    //             }
    //         }
    //         echo "</table>";
            
    //     }else{
    //         echo " 0 result";
    //     }
    // }else{
    //     echo "error";
    // }

    //end page


?>