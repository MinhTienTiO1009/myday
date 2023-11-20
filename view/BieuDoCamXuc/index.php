<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biểu đồ cảm xúc</title>
</head>
<body>
    <div class="DropdownMenu">
        <h3 >Biểu đồ cảm xúc </h3>
        <form action="data.php" method="post">
            <select name="thang" id="thang">
                <?php
                    include_once("Model/ketnoi.php");
                    $object = new conDB();
                    $connection = $object->connectDB($conn);
                    if ($connection) {
                        $queryCommand = 'SELECT distinct month(ThoiGian) as ThoiGian, TrangThai FROM CAMXUC WHERE USERNAME = "nguyenvana"';
                        $tbl = mysqli_query($conn, $queryCommand);
                        $result = mysqli_num_rows($tbl);
                        if($result>0){
                            while($row = mysqli_fetch_assoc($tbl)){
                                $thang = $row['ThoiGian'];
                                echo "<option value=$thang>$thang</option>";
                            }
                        }else{
                            echo "0 result";
                        }
                    }
                ?>
            </select>
            <input type="submit" name="btnfilter" value="filter">
        </form>
    </div>
    <?php
        if (isset($_REQUEST['btnfilter'])) {
            $thang = $_REQUEST['thang'];
            echo $thang;
        }
    ?>
    <div class="chart">
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
      google.load('visualization', '1.0', {'packages':['corechart']});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var ajax = new XMLHttpRequest();
        var method = "GET";
        var url = "data.php";
        var asynchrous = true;
        ajax.open(method, url, asynchrous);

        ajax.send();

        ajax.onreadystatechange = function(){
            // (this.readyState==4 && this.status==200)?alert(this.responseText): alert("400");
            if (this.readyState==4 && this.status==200) {
              var response = JSON.parse(this.responseText);
              console.log(response);
              var data = new google.visualization.DataTable();
              data.addColumn('string', 'ThoiGian');
              data.addColumn('number', 'Cảm xúc');
              for (var i = 0; i < response.length; i++) {
                  if(response[i].TrangThai === 'Tệ'){
                    a = 1;
                  }
                  if(response[i].TrangThai === 'Buồn'){
                    a = 2;
                  }
                  if(response[i].TrangThai === 'Bình thường'){
                    a = 3;
                  }
                  if(response[i].TrangThai === 'Vui'){
                    a = 4;
                  }
                  if(response[i].TrangThai === 'Hạnh phúc'){
                    a = 5;
                  }
                  data.addRow([response[i].ThoiGian, a]);
                  
              };
              var options = {'title':'Chủ đề tháng',
                       'width':1000,
                       'height':600,
                        'color': 'green'};
              var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
              chart.draw(data, options);
            }
          }
      }
    </script>
    <div id="chart_div"></div>
    <div>
      <form action="#" method="post">
        <!-- <label for="ghiChu">Tháng này của tôi ngập tràng</label> -->
        <textarea placeholder="Tháng này của tôi ngập tràn" name="ghiChu" id="ghiChu" cols="102" rows="5"></textarea>
      </form>
    </div>
    </div>
</body>
</html>