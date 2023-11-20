<?php
    include_once("ketnoi.php");
    class modelMTNL{
        function SelectAllMTNL(){
            $p = new conDB();
            if($p->connectDB($conn)){
                $str = "SELECT * FROM motthangnhinlai";
                $tbl = mysqli_query($str);
                $p->disconnect($conn);
                return $tbl;
            }return false;
        }
        function SelectAllMTNLByMonth($month,$year){
            $p = new conDB();
            if($p->connectDB($conn)){
                $str = "SELECT * FROM motthangnhinlai where month(thangNam)= $month and year(thangNam)= $year";
                $tbl = mysqli_query($conn,$str);
                $p->disconnect($conn);
                return $tbl;
            }return false;
        }
        function insertMTNL($username, $than, $tam, $tri){
            $p = new conDB();
            if ($p->connectDB($conn)) {
                $string = "INSERT INTO motthangnhinlai(username, than, tam, tri)";
                $string .= " VALUES(N'" . $username . "', N'" . $than . "', N'" . $tam . "', N'" . $tri . "')";
                $table = mysqli_query($conn,$string);
                $p->disconnect($conn);
                return $table;
            } else {
                return false;
            }
        }
        
    }
?>