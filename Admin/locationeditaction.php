<?php 
include("config.php");
if(isset($_POST['btnsubmit']))
{
    $locid=$_GET["editid"];
    $locname=$_POST["txt_locationname"];
    $sql = "UPDATE `tbllocation` SET `locationname`='$locname' WHERE `locationid`='$locid'";
    // echo $sql;exit;
    $result = mysqli_query($con,$sql); 
    echo"<script>alert('Updation successfull');window.location='locationview.php';</script>";  
} 
?>