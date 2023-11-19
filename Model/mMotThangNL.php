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
        function insertMTNL($thangnam, $username, $than, $tam, $tri){
            $p = new ConnectDataBase();
            if ($p->connect($conn)) {
                $parsedDate = date_parse_from_format("Y-m", $thangnam);
                $thang = $parsedDate['month'];
        
                $string = "INSERT INTO motthangnhinlai(thangNam, username, than, tam, tri)";
                $string .= " VALUES('" . $thang . "', N'" . $username . "', N'" . $than . "', N'" . $tam . "', N'" . $tri . "')";
                
                $table = mysqli_query($conn,$string);
                $p->disconnect($conn);
                return $table;
            } else {
                return false;
            }
        }
        
    }
?>