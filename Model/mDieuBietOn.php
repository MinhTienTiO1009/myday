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
        function SelectAllDBOByMonth($month, $year){
            $p = new ConnectDataBase();
            if($p->connect($conn)){
                $str = "SELECT * FROM dieutoibieton where month(ThoiGian)= $month and year(ThoiGian)= $year";
                $tbl = mysqli_query($conn,$str);
                $p->disconnect($conn);
                return $tbl;
            }return false;
        }
        function insertDBO($noidung, $username){
            $p = new ConnectDataBase();
            if ($p->connect($conn)) {
                $string = "INSERT INTO dieutoibieton(NoiDung, username) ";
                $string .= "VALUES(N'" . $noidung . "', N'" . $username . "')";
                $table = mysqli_query($conn, $string);
                $p->disconnect($conn);
                return $table;
            } else {
                return false;
            }

        }
    }
?>