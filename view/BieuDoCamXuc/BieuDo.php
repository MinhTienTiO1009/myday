<html>
  <head>
    <!--Load the AJAX API-->
<<<<<<< HEAD
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
      google.load('visualization', '1.0', {'packages':['corechart']});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var ajax = new XMLHttpRequest();
        var method = "GET";
        var url = "data.php";
        // var 
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
=======
    
>>>>>>> 91ec294f8259857c1a29b20ef4170b796fab736d
  </head>
  <body>
    
  </body>
</html>