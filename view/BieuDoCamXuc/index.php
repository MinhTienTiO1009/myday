<?php
if (!isset($_SESSION['username']) || $_SESSION['login'] !== true) {
    // Nếu chưa đăng nhập, chuyển hướng đến trang đăng nhập
    header("Location: index.php?login");
}
?>
<div class="content-todo">
    <div class="header-content-todo">
        <span class="check-icon"><i class="fa-solid fa-check"></i></span>
        <h2 class="title-header">Hoạt động mỗi ngày</h2>
    </div>

    <div class="todo-all-input">
            <div class="todo-all-work">
                <div class="todo-task-work-label">
                    <div class="todo-work-label todo-label">
                        <b>Việc cần làm</b>
                    </div>

                    <div class="add-todo-work">
                        <span><i class="fa-solid fa-square-plus"></i></span>
                        
                    </div>
                </div>
                
                

                <form class="input-form input-form-work">
                        <div id="input-task" class="text-input ">
                            <input type="checkbox" class="check_test" name="" id="">
                            <input type="text" class="text_test" name="" placeholder="nhập công việc" id="">
                        </div>

                        <div id="input-task" class="text-input ">
                            <input type="checkbox" class="check_test" name="" id="">
                            <input type="text" class="text_test" name="" placeholder="nhập công việc" id="">
                        </div>

                        <div id="input-task" class="text-input ">
                            <input type="checkbox" class="check_test" name="" id="">
                            <input type="text" class="text_test" name="" placeholder="nhập công việc" id="">
                        </div>

                        <div id="input-task" class="text-input ">
                            <input type="checkbox" class="check_test" name="" id="">
                            <input type="text" class="text_test" name="" placeholder="nhập công việc" id="">
                        </div>

                        <div id="input-task" class="text-input ">
                            <input type="checkbox" class="check_test" name="" id="">
                            <input type="text" class="text_test" name="" placeholder="nhập công việc" id="">
                        </div>
                    <!-- <input type="text" id="text-input-todo-2" class="text-input" placeholder="Input 2">
                    <input type="text" id="text-input-todo-3" class="text-input" placeholder="Input 3">
                    <input type="text" id="text-input-todo-4" class="text-input" placeholder="Input 4">
                    <input type="text" id="text-input-todo-5" class="text-input" placeholder="Input 5">
                    <input type="text" id="text-input-todo-6" class="text-input" placeholder="Input 6"> -->
                </form>

        </div>

        <div class="todo-all-emoji">
            <div class="todo-emoji-label todo-label">
                <b>Cảm xúc</b>
            </div>

            <form class="input-form input-form-emoji">
                <button type="button" class="btn-emoji" onclick="changeColorPink(this)"> <span class="icon-happy"><i class="fa-regular fa-face-laugh-beam"></i></i></span><b>Hạnh phúc</b></button>
                <button type="button" class="btn-emoji" onclick="changeColorPink(this)"> <span class="icon-happy"><i class="fa-regular fa-face-smile-beam"></i></span><b>Vui vẻ</b></button>
                <button type="button" class="btn-emoji" onclick="changeColorPink(this)"> <span class="icon-happy"><i class="fa-regular fa-face-meh"></i></span><b>Bình thường</b></button>
                <button type="button" class="btn-emoji" onclick="changeColorPink(this)"> <span class="icon-happy"><i class="fa-regular fa-face-frown-open"></i></span><b>Buồn</b></button>
                <button type="button" class="btn-emoji" onclick="changeColorPink(this)"> <span class="icon-happy"><i class="fa-regular fa-face-sad-tear"></i></span><b>Rất buồn</b></button>
                
                <!-- <button type="button" class="btn-emoji" onclick="changeColorPink(this)">Emoji 2</button>
                <button type="button" class="btn-emoji" onclick="changeColorPink(this)">Emoji 3</button>
                <button type="button" class="btn-emoji" onclick="changeColorPink(this)">Emoji 4</button>
                <button type="button" class="btn-emoji" onclick="changeColorPink(this)">Emoji 5</button> -->
            </form>


        </div>

        <div class="todo-all-water">
            <div class="todo-water-label todo-label">
                <b>Lượng nước uống</b>
            </div>

            <form class="input-form input-form-water">
                <button type="button" class="btn-emoji" onclick="changeColorBlue(this)"> <span class="icon-happy"><i class="fa-solid fa-glass-water-droplet"></i></i></span><b>0.5 Lit</b></button>
                <button type="button" class="btn-emoji" onclick="changeColorBlue(this)"> <span class="icon-happy"><i class="fa-solid fa-glass-water-droplet"></i></i></span><b>1 Lit</b></button>
                <button type="button" class="btn-emoji" onclick="changeColorBlue(this)"> <span class="icon-happy"><i class="fa-solid fa-glass-water-droplet"></i></i></span><b>1.5 Lit</b></button>
                <button type="button" class="btn-emoji" onclick="changeColorBlue(this)"> <span class="icon-happy"><i class="fa-solid fa-glass-water-droplet"></i></i></span><b>2 Lit</b></button>
                <button type="button" class="btn-emoji" onclick="changeColorBlue(this)"> <span class="icon-happy"><i class="fa-solid fa-glass-water-droplet"></i></i></span><b>2.5 Lit</b></button>
                
            </form>

        </div>
    </div>
    
    <div class="todo-note">
        <div class="todo-note-label ">
            <b>Ghi chú :</b>
        </div>

        
        <textarea class="todo-note-content" rows="3" cols="30" placeholder="Nhập ghi chú vào đây    "></textarea>
        
    </div>
    
    <button id="saveButton">Lưu</button>

            
</div>

<script>
// Function to change the color of a clicked button and reset others
function changeColorPink(selectedButton) {
    // First, get all buttons with the class 'btn-emoji'
    var buttonsEmoji = document.getElementsByClassName('btn-emoji');

    // Loop through the NodeList object and reset the background color
    for (var i = 0; i < buttonsEmoji.length; i++) {
        buttonsEmoji[i].style.backgroundColor = ''; // Reset to default or any other color
    }

    // Now change the background color of the clicked button
    selectedButton.style.backgroundColor = 'rgba(252, 159, 159, 0.55)';
}

function changeColorBlue(selectedButton) {
    // First, get all buttons with the class 'btn-emoji'
    var buttonsWater = document.getElementsByClassName('btn-water');

    // Loop through the NodeList object and reset the background color
    for (var i = 0; i < buttonsWater.length; i++) {
        buttonsWater[i].style.backgroundColor = ''; // Reset to default or any other color
    }

    // Now change the background color of the clicked button
    selectedButton.style.backgroundColor = 'rgba(122, 248, 203, 0.77)';
}
</script>
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
    