<?php
include("header.php");
include("config.php");
  
 $query ="SELECT deptname,count(*) as bookingcount FROM tblopdetails op inner join tbldepartment d on op.departmentid=d.deptid  group by deptname ";  
 $result = mysqli_query($con, $query);  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>    
           <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['deptname', 'booking count'],  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          { 
					echo "['".$row["deptname"]."', ".$row["bookingcount"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Percentage ',  
                      //is3D:true,  
                      pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
                chart.draw(data, options);  
           }  
           </script>  
      </head>  
      <body>  
           <div class="logo">
              <a href="./index.php">
                <br> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                 <img src="img/logo.png" alt="">&nbsp; &nbsp;</a>
                 </div> 
           <div style="margin:20%; width:900px; margin-top:6%">  
                <h3 align="center">Pie Chart-Number of appointments under each department</h3>  
                <br />  
                <div id="piechart" style="width: 900px; height: 500px;"></div>  
           </div>  
          </div>
      </body>  
 </html>  
</body>
</html>
<?php
include("footer.php");
?>