<?php
include("config.php");
$opdetailid=$_GET['appid'];
$sql = "UPDATE tblopdetails SET op_consult_status='consulted' where opdetailid='$opdetailid'";
//echo $sql;
$result = mysqli_query($con,$sql); 
echo"<script>alert('CONSULTATION COMPLETED');window.location='appointments.php';</script>";  
?>