<?php
include("config.php");
    if(isset($_GET['depid']))
    {
       
        $deptid=$_GET["depid"];
        $sql = "DELETE from `tbldepartment` WHERE `deptid`='$deptid'";
        // echo $sql;exit;
        $result = mysqli_query($con,$sql); 
        echo"<script>alert('Deletion successfull');window.location='departmentview.php';</script>";  
    } 
    ?>