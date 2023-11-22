<?php
include("config.php");
    if(isset($_GET['districtid']))
    {
       
        $disname=$_GET["districtid"];
        $sql = "DELETE from `tbldistrict` WHERE `districtid`='$disname'";
        // echo $sql;exit;
        $result = mysqli_query($con,$sql); 
        echo"<script>alert('Deletion successfull');window.location='districtview.php';</script>";  
    } 
    ?>