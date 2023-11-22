<?php
include("header.php");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>appointments_department-wise</title>
</head>

<body>
<form action="Excel/excel_patientreg_department.php" method="post">
<div class="logo">
              <a href="./index.php">
                <br> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                 <img src="img/logo.png" alt="">&nbsp; &nbsp;</a>
                 </div>
                 <div class="container" style="padding:6%; width:100%;margin-left:15%;margin-bottom: 5%;" >
  <div class="row">
  <div class="col-md-12" style=" border-radius:15px; top: 106px;    margin-bottom: 59px;">
  <div class="row" style="margin-left: -173%;margin-top: 2%;margin-bottom: -5%;">
  </div>
  <input type="submit" name="addnew" value="Export" class="btn btn-primary" style="margin-left:30px">
  <h2 style="text-align: center;margin-top: 6%;font-family: fantasy;"> APPOINTMENTS IN EACH DEPARTMENT</h2>
  <div class="form-horizontal" style="margin-left:0px;">
  <table class="table table-hover" style="border: 2px solid #adaaaa; box-shadow: 3px 3px 11px #777777; margin-bottom:7%">

  <tr>
                          <th> Sl.No </th>
                          <th> Department Name </th> 
                          <th> No_of_Appointments</th>
                          
                          
                          
                          
                        </tr>
   
    <?php
include("config.php");
$s=1;
$sql="select deptname,count(patientid) from tblopdetails o inner join tbldepartment d on d.deptid=o.departmentid group by deptname";
$res=mysqli_query($con,$sql);
   while($display=mysqli_fetch_array($res))
   {
    ?>
	<tr>
                          <td class="py-1"><?php echo $s++;?></td>
                          <td> <?php echo $display["deptname"];?></td>
                          <td> <?php echo $display["count(patientid)"];?></td>
                         
                          
                          
                      </tr>
                      <?php  
	
  }
  ?>
</table>

</div>
  </div>
  </div>
  <div> </div>
  </div>
  </div>
</form>
</body>
</html>
<?php
include("footer.php");
?>