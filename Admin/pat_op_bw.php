<?php
include("header.php");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
<form action="Excel/excel_pat_op_bw.php" method="post">
<div class="logo">
              <a href="./index.php">
                <br> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                 <img src="img/logo.png" alt="">&nbsp; &nbsp;</a>
                 </div>
                 </div>
  <div class="container" style="padding:6%; width:100%;margin-left:15%;margin-bottom: 5%;" >
  <div class="row">
  <div class="col-md-12" style=" border-radius:15px; top: 106px;    margin-bottom: 59px;">
  <div class="row" style="margin-left: -173%;margin-top: 2%;margin-bottom: -5%;">
  </div>
  <input type="submit" name="addnew" value="Export" class="btn btn-primary" style="margin-left:30px">
  <h2 style="text-align: center;margin-top: 6%;font-family: fantasy;">DETAILS OF OPNUMBER B/W 1001 AND 1020</h2>
  <div class="form-horizontal" style="margin-left:0px;">
  <table class="table table-hover" style="border: 2px solid #adaaaa; box-shadow: 3px 3px 11px #777777; margin-bottom:7%">

  <tr>
                          <th> Sl.No </th>
                          <th> Patient Name  </th> 
                          <th> OP number</th>
                          <!-- <th> Join Date</th> -->
                          <!-- <th> Phone </th>
                          <th> Designation </th>
                          <th> Qualification </th> -->
                          
                          
                          
                        </tr>
   
    <?php
include("config.php");
$s=1;
$sql="select patientname,opnumber from tblopbooking o inner join tblpatient p on p.patientid=o.patientid where opnumber between 1001 and 1020 ";
$res=mysqli_query($con,$sql);
   while($display=mysqli_fetch_array($res))
   {
    ?>
	<tr>
                          <td class="py-1"><?php echo $s++;?></td>
                          <td> <?php echo $display["patientname"];?></td>
                          <td> <?php echo $display["opnumber"];?></td>
                          
                         
                          
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