<?php
    include_once("ketnoi.php");
    class modelMTNL{
        function SelectAllMTNL(){
            $p = new ConnectDataBase();
            if($p->connect($conn)){
                $str = "SELECT * FROM motthangnhinlai";
                $tbl = mysqli_query($str);
                $p->disconnect($conn);
                return $tbl;
            }return false;
        }
        function SelectAllMTNLByMonth($month,$year){
            $p = new ConnectDataBase();
            if($p->connect($conn)){
                $str = "SELECT * FROM motthangnhinlai where month(thangNam)= $month and year(thangNam)= $year";
                $tbl = mysqli_query($conn,$str);
                $p->disconnect($conn);
                return $tbl;
            }return false;
        }
        function insertMTNL($thangnam, $mathoiquen, $ghichu, $username, $than, $tam, $tri){
            $p = new ConnectDataBase();
            if ($p->connect($conn)) {
                $string = "INSERT INTO motthangnhinlai(thangNam, mathoiquen, ghiChu, username, than, tam, tri)";
                $string = "VALUES(".$thangnam.",".$mathoiquen.",N'".$ghichu."',N'".$username."',N'".$than."',N'".$tam."',N'".$tri."')";
                $table = mysqli_query($string);
                $p->disconnect($conn);
                return $table;
            } else {
                return false;
            }

        }
    }
?>