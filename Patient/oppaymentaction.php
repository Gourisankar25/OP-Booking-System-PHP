<?php
include("config.php");
session_start();

    $patientid=$_SESSION['patientid'];
    $payment=$_POST['amounttopay'];
    {
        $sql=mysqli_query($con,"update tblopbooking set oppayment='$payment' where patientid='$patientid'");
        // echo "update tblopbooking set oppayment='$payment' where patientid='$patientid'";
        
          echo "<script>alert('APPOINTMENT SENT SUCCESFULLY');window.location='index.php'</script>";
    }
		
?>