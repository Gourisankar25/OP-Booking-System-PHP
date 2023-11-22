<?php
include("../config.php");
if(!isset($_GET['opid'])){
    header("Location: localhost/HospitalOP/HospitalOP/Admin/appointmentview.php");
    die();
}

$opid = $_GET["opid"];

if(!isset($_GET["status"])){
    header("Location: localhost/HospitalOP/HospitalOP/Admin/appointmentview.php");
    die();
}

$status = $_GET["status"];

if($status == "1"){
    $sql=mysqli_query($con, "UPDATE `tblopbooking` SET `opstatus`='accept' WHERE opid='$opid';" );
    echo"<script>alert('');window.location='';</script>";  
}else{
    $sql=mysqli_query($con, "UPDATE `tblopbooking` SET `opstatus`='reject' WHERE opid='$opid';" );
}

header("Location: http://localhost/HospitalOP/HospitalOP/Admin/appointmentview.php");
die();