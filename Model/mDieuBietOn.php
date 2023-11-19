<?php
    include_once("ketnoi.php");
    class modelDBO{
        function SelectAllDBO(){
            $p = new ConnectDataBase();
            if($p->connect($conn)){
                $str = "select * from dieutoibieton where username = username";
                $tbl = mysqli_query($str);
                $p->disconnect($conn);
                return $tbl;
            }return false;
        }
        function SelectAllDBOByMonth($month,$year, $a){
            $p = new ConnectDataBase();
            if($p->connect($conn)){
                $a = $_SESSION['username'];
                $str = "SELECT * FROM dieutoibieton where month(ThoiGian)= $month and year(ThoiGian)= $year";
                $tbl = mysqli_query($conn,$str);
                $p->disconnect($conn);
                return $tbl;
            }return false;
        }
        function insertDBO($noidung, $thoigian, $username){
            $p = new ConnectDataBase();
            if ($p->connect($conn)) {
                $string = "INSERT INTO dieutoibieton(NoiDung, ThoiGian, username) ";
                $string .= "VALUES(N'" . $noidung . "'," . $thoigian . ",N'" . $username . "')";
                $table = mysqli_query($conn, $string);
                $p->disconnect($conn);
                return $table;
            } else {
                return false;
            }

        }
    }
?>