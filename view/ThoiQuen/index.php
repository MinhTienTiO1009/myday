<?php
if (!isset($_SESSION['username']) || $_SESSION['login'] !== true) {
    // Nếu chưa đăng nhập, chuyển hướng đến trang đăng nhập
    header("Location: index.php?login");
}
?>
<?php
$servername = "localhost";
$database = "mydayhandbook";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
 $currentUserName = $_SESSION['username'];
 if (!isset($_SESSION['username'])){
     // echo "<script>window.location.href = './view/DangNhap_DangKy/login.php';</script>";

 }
 $sql = "SELECT tenThoiQuen,TQThang,UserName FROM thoiquen WHERE UserName = '$currentUserName' ORDER BY TQThang ASC";

//  $result = $conn->query($sql);

//  $sukien = $result->fetch_all(MYSQLI_ASSOC);
 // Check connection
 if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
 }
 mysqli_close($conn);
?>
<div>
    <h4>
        Những thói quen tôi muốn có
    </h4>
    <h6>Hãy cho bản thân 21 ngày để phát triển</h6>
    <a href="index.php?createThoiQuen"
    >
    <button>Add</button>
</a>
    <table>
        <thead>
            <tr>
                <td class="dataTableTitle">Thói quen\Ngày</td>
                <?php
                    for ($i=1; $i <= 31; $i++) { 
                        echo "<td class='dataTableTitle'>$i</td>";
                    }
                ?>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="dataTableTitle">Ăn sáng</td>
                <?php
                    for ($i=1; $i <= 31; $i++) { 
                        echo "<td class='dataTableTitle'><input class='checkHabit' checked type='checkbox' value=$i></td>";
                    }
                ?>
            </tr>
            <tr>
            <td class="dataTableTitle">Học tiếng Anh</td>
                <?php
                    for ($i=1; $i <= 31; $i++) { 
                        echo "<td class='dataTableTitle'><input class='checkHabit' checked type='checkbox' value=$i></td>";
                    }
                ?>
            </tr>
            <tr>
            <td class="dataTableTitle">Dậy lúc 7h</td>
                <?php
                    for ($i=1; $i <= 31; $i++) { 
                        echo "<td class='dataTableTitle'><input class='checkHabit' checked type='checkbox' value=$i></td>";
                    }
                ?>
            </tr>
        </tbody>
    </table>
</div> 