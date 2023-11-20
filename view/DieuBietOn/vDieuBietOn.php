<?php
if (!isset($_SESSION['username']) || $_SESSION['login'] !== true) {
    // Nếu chưa đăng nhập, chuyển hướng đến trang đăng nhập
    header("Location: index.php?login");
}
?>

<?php
    include_once("controller/cDieuBietOn.php");
    function showDBOByMonth() {
        $p = new controlDBO();
        include_once("Model/ketnoi.php");
        $a = new conDB();
        $connection = $a->connectDB($conn);
        $user = $_SESSION['username'];
        if($connection){
            $str = "SELECT distinct month(ThoiGian) as thoigian FROM dieutoibieton WHERE username = '$user'";
            $tbl = mysqli_query($conn, $str);
            $result = mysqli_num_rows($tbl);
            $a->disconnect($conn);
            echo ('<form action="#" method="post"><select name="thang" id="thang">');
                if($result>0){
                    while($row = mysqli_fetch_assoc($tbl)){
                        $thang = $row['thoigian'];
                    If ($_REQUEST['thang'] == $thang)
                    {
                        echo "<option selected value='$thang'>$thang</option>";
                    } else {
                        echo "<option value='$thang'>$thang</option>";
                    }
                                }
                }else{
                    echo "0 result";
                }
                echo '</select><input type="submit" name="submit" value="submit"></form>';
                echo "<b><h2>Nhìn lại điều bạn biết ơn</h2></b>";
                if (isset($_REQUEST['submit'])) {
                    $month = $_POST['thang'];
                    $tblDBO = $p->getAllDBOByMonth($month, 2023);
                    displayDBO($tblDBO);
                }
            }return false;
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
                echo "<tr><th style='text-align: center'>Nội dung</th><th style='text-align: center'>Thời gian</th></tr>";
                while ($row = mysqli_fetch_assoc($tblDBO)) {
                    echo "<tr>";
                    echo '<td style ="width: 70%; height: 100px">';
                    echo $row['NoiDung']."</td><td>".$row['ThoiGian']."</td>"; 
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

<div class="col-lg-12 container">
	<div class="card card-outline card-primary">
		<div class="card-body">
			<form action="" class="dieuBietOnForm" method="POST" id="vAddDBO">
                <b><h2>Điều tôi biết ơn mỗi ngày</h2></b>
                <br></br>
		<div class="row">
			<div class="col-md-12">
				<div class="form-group">
					<label for="" class="control-label"><b>Điều bạn biết ơn</b></label>
                    <textarea class="form-control form-control-sm" name="noidung" rows="4" cols="50" placeholder="Nhập điều bạn biết ơn hôm nay" require></textarea>
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
    showDBOByMonth();
    include_once("controller/cDieuBietOn.php");
    if(isset($_REQUEST["addDBO"])){
        $noidung = $_REQUEST["noidung"];
        $username = $_SESSION['username'];
        $p = new controlDBO();
        $kq = $p->addDBO($noidung, $username);
        if($kq){
            echo "<script>alert('Thêm thành công')</script>";
            echo header("refresh:0; url='index.php?dieuBietOn'");
        }else{
            echo "<script>alert('Thêm điều biết ơn không thành công')</script>";
            echo header("refresh:0; url='index.php?dieuBietOn'");
        }
    }
    ?>