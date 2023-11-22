<?php
include("header.php");
include("config.php");
$docid=$_SESSION['docterid'];
 $query ="SELECT count(*) as gendercount,gender from tblopdetails o inner join tblpatient p on p.patientid=o.patientid inner join tbldoctor d on d.doctorid=o.doctorid where d.doctorid='$docid' group by p.gender ";  
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
                          ['gender', 'gendercount'],  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          { 
                            
					echo "['".$row["gender"]."', ".$row["gendercount"]."],";  
                          }  
                         $_SESSION['name']=$row['name'];
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
                <h3 align="center">Pie Chart- Number of male and female applications under <?php echo $_SESSION['name']; ?></h3>  
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