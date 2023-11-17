<?php
    include_once("ketnoi.php");
    

    class modelNgayCuaToi {
        function selectAllWorkName(){
            
            $connect = new conDB();
            $con;
            $result = $connect->connectDB ($con);
            if ($result) {
                $stringQuery = "select * from congviecquantrong";
                $table = mysqli_query($con, $stringQuery);
                $connect->disconnectDB ($con);
                return $table;
            }
            else{
                return false;
            }
        }


        function insertWork ($nameWork, $timeLine, $takeNote){
            
            $connect = new conDB();
            $con;
            $result = $connect->connectDB ($con);
            if( $result){
               
                $stringQuery = "INSERT INTO congviecquantrong VALUES ( NULL,'$nameWork', '$timeLine', '$takeNote' )";
            
                $table = mysqli_query($con, $stringQuery);
                $connect->disconnectDB($con);
                return $table;
            }else{
                return false;
            }
        }

        function insertWorkMyDay ($timeLineKey,$amountWater, $countChecked, $emotionDay,$note,$userName){
            
            $connect = new conDB();
            $con;
            $result = $connect->connectDB ($con);
            if( $result){
               
                $stringQuery = "INSERT INTO motngaycuatoi VALUES ( '$timeLineKey','$amountWater', '$countChecked', '$emotionDay','$note','$userName' )";
            
                $table = mysqli_query($con, $stringQuery);
                $connect->disconnectDB($con);
                return $table;
            }else{
                return false;
            }
        }

    }
?>