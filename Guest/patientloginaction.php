<?php
include("config.php");
session_start();
    $username=$_POST['username'];
    $password=$_POST['password'];
    $sql=mysqli_query($con,"SELECT * from tblpatient WHERE `username`='$username' and `password`='$password'");
    $row=mysqli_fetch_array($sql);
    if(mysqli_num_rows($sql) > 0)
    {
    $_SESSION['patientid']=$row['patientid'];
    $_SESSION['patientname']=$row["patientname"];
    
    header("Location:../Patient/index.php ");
    }
    else
    {
    echo "<script>alert('INVALID USER');window.location='patientlogin.php'</script>";
    }
    ?>