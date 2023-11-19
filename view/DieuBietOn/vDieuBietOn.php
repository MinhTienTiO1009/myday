<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        } */

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
    <title>Điều biết ơn</title>
</head>
<body>

<?php
    include_once("./controller/cDieuBietOn.php");
    function showDBOByMonth() {
        $p = new controlDBO();
        $a = '    
            <form action="#" method="post">
                <input type="text" name="Thang">
                <input type="submit" name="submit">
            </form>';

        echo "<h2>Điều biết ơn trong tháng $a </h2>";
    
        if (isset($_REQUEST['submit'])) {
            $a = $_SESSION['username'];
            $month = $_POST['Thang'];
            $tblDBO = $p->getAllDBOByMonth($month, $year, $a);
            displayDBO($tblDBO);
        }
    }
    function showDBO($tblDBO){
        if ($tblDBO) {
            // kiêm tra kết quả có trả về dữ liệu
            if (mysqli_num_rows($tblDBO) > 0) {
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

    function displayDBO($tblDBO){
        if ($tblDBO) {
            if (mysqli_num_rows($tblDBO) > 0)
                {
                echo "<table style='width: 100%' border='1px solid' margin='auto'>";
                echo "<tr><th>Mã DBO</th><th>Nội dung</th><th>Thời gian</th><th>Username</th></tr>";
                while ($row = mysqli_fetch_assoc($tblDBO)) {
                    echo "<tr>";
                    echo '<td style ="width: 25%; height: 100px">';
                    echo $row['MaDBO']."</td><td>".$row['NoiDung']."</td><td>".$row['ThoiGian']."</td><td>".$row['username']."</td>"; 
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

<div class="col-lg-12">
	<div class="card card-outline card-primary">
		<div class="card-body">
			<form action="" method="POST" id="vAddDBO">
        <input type="hidden" name="id" >
		<div class="row">
			<div class="col-md-12">
				<div class="form-group">
					<label for="" class="control-label">Điều bạn biết ơn</label>
					<input type="text" class="form-control form-control-sm" name="noidung" require>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
            <div class="form-group">
              <label for="" class="control-label">Thời gian</label>
              <input type="date" class="form-control form-control-sm" name="thoigian" require>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="" class="control-label">Tên người dùng</label>
              <input type="text" class="form-control form-control-sm" name="username" require>
            </div>
          </div>
		</div>
        <div class="card-footer border-top border-info">
    		<div class="d-flex w-100 justify-content-center align-items-center">
            <input class="btn btn-flat  bg-gradient-primary mx-2" type="submit" id="btnsbubmit" name="addDBO" value="Save">
            <input class="btn btn-flat  bg-gradient-primary mx-2" type="reset" id="btnreset" value="Reset">
    		</div>
    	</div>
        </form>
    	</div>
	</div>
    <?php
        // include_once("controller/cDieuBietOn.php");

    ?>
    <?php
    showDBOByMonth();
    include_once("controller/cDieuBietOn.php");
    
    if(isset($_REQUEST["addDBO"])){
        $noidung = $_REQUEST["noidung"];
        $thoigian = $_REQUEST["thoigian"];
        $username = $_REQUEST["username"];
        $p = new controlDBO();
        $kq = $p->addDBO($noidung, $thoigian, $username);
        if($kq){
            echo "<script>alert('Thêm thành công')</script>";
            echo header("refresh:0; url='index.php?dieuBietOn'");
        }else{
            echo "Lỗi";
        }
    }
    ?>

</div>
</body>
</html>
