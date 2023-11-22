<?php
include("config.php");
session_start();
    $username=$_POST["email"];
    // echo $username;
    $password=$_POST["password"];
    // echo $password;exit;
    $sql=mysqli_query($con,"SELECT * from tbldoctor WHERE email='$username' and password='$password'");
    $row=mysqli_fetch_array($sql);
    if($row>0)
    {
    $_SESSION['docterid']=$row['doctorid'];
    header("Location:../Doctor/index.php ");
    }
    else
    {
        echo "<script>alert('invalid user');window.location='doctorlogin.php'</script>";
    }
    ?>