<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        h2 {
            color: #333;
            text-align: center;
        }

        form {
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: auto;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
    <title>MOT THANG NHIN LAI</title>
</head>
<body>
<?php
    include_once("controller/cMotThangNL.php");
    function showMTNLByMonth() {
        $p = new controlMTNL();
        
        $a = '    
            <form action="" method="post">
                <input type="text" name="Thang">
                <input type="submit" name="submit">
            </form>
        ';
    
        echo "<h2>Nhin lai thang $a </h2>";
    
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $month = $_POST['Thang'];
            $tblMTNL = $p->getAllMTNLByMonth($month, 2023); // gọi tất cả sản phẩm thuộc comp
            displayMTNL($tblMTNL);
        }
    }

    function showMTNL($tblMTNL){
        if ($tblMTNL) {
            // kiêm tra kết quả có trả về dữ liệu
            if (mysql_num_rows($tblMTNL) > 0) {
                // tạo biến đếm để kiểm tra dữ liệu
                $dem = 0;
                // tạo table để hiện thị dữ liệu
                echo '<table>';
                // đuyệt từng dòng dữ liệu
                echo "</table>";
            } else {
                echo "0 result";
            }
        } else {
            echo "Không có giá trị";
        }
    }

    function displayMTNL($tblMTNL){
        if ($tblMTNL) {
            if (mysqli_num_rows($tblMTNL) > 0){
                echo "<table style='width: 100%' border='1px solid' margin='auto'>";
                echo "<tr><th>Thang Nam</th><th>Ghi chu</th><th>Than</th><th>Tam</th><th>Tri</th></tr>";
                // duyệt từng dòng dữ liệu trong kết quả nhận được sau khi truy vấn
                while ($row = mysqli_fetch_assoc($tblMTNL)) {
                    echo "<tr>";
                    echo '<td style ="width: 25%; height: 100px">';
                    echo $row['thangNam']."</td><td>".$row['ghiChu']."</td><td>".$row['than']."</td><td>".$row['tam']."</td><td>".$row['tri']."</td>"; 
                    echo "</td>";
                    echo "</tr>";
                }
                echo "</table>";
            } else {
                echo "0 result";
            }
        } else {
            echo "Khong co gia tri";
        }
    }
    
?>
    
</body>
</html>

<div class="col-lg-12">
	<div class="card card-outline card-primary">
		<div class="card-body">
			<form action="" id="vAddMTNL">
        <input type="hidden" name="id" value="<?php echo isset($ma) ? $id : '' ?>">
		<div class="row">
			<div class="col-md-12">
				<div class="form-group">
					<label for="" class="control-label">Than</label>
					<textarea class="form-control form-control-sm" name="than" rows="4" cols="50" require></textarea>
				</div>
			</div>
		</div>
        <div class="row">
			<div class="col-md-12">
				<div class="form-group">
					<label for="" class="control-label">Tam</label>
                    <textarea class="form-control form-control-sm" name="tam" rows="4" cols="50" require></textarea>
					<!-- <input type="textarea" class="form-control form-control-sm" name="tam" require> -->
				</div>
			</div>
		</div>
        <div class="row">
			<div class="col-md-12">
				<div class="form-group">
					<label for="" class="control-label">Tri</label>
                    <textarea class="form-control form-control-sm" name="tri" rows="4" cols="50" require></textarea>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
            <div class="form-group">
              <label for="" class="control-label">Thang nam</label>
              <input type="date" class="form-control form-control-sm" autocomplete="off" name="thangnam" require>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="" class="control-label">Tên người dùng</label>
              <input type="text" class="form-control form-control-sm" name="username" require>
            </div>
          </div>
		</div>
        </form>
    	</div>
    	<div class="card-footer border-top border-info">
    		<div class="d-flex w-100 justify-content-center align-items-center">
            <input class="btn btn-flat  bg-gradient-primary mx-2" type="submit" id="btn" name="addMTNL" value="Save">
            <input class="btn btn-flat  bg-gradient-primary mx-2" type="reset" id="btn" value="Cancle">
    		</div>
    	</div>
	</div>

    <?php
    include_once("controller/cMotThangNL.php");
    if(isset($_REQUEST["addDBO"])){
        $than = $_REQUEST["than"];
        $tam = $_REQUEST["tam"];
        $tri = $_REQUEST["tri"];
        $thangnam = $_REQUEST["thangnam"];
        $username = $_REQUEST["username"];
        $p = new controlMTNL();
        $kq = $p->addMTNL($than, $tam, $tri, $thangnam, $username);
        if($kq==1){
            echo "<script>alert('Thêm thành công')</script>";
            echo header("refresh:0; url='index.php?vMotThangNL.php'");
        }else{
            echo "Lỗi";
        }
    }
    ?>

</div>
</body>
</html>
