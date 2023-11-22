<?php
include("config.php");
    if(isset($_GET['docid']))
    {
       
        $doctorid=$_GET["docid"];
        $sql = "DELETE from `tbldoctor` WHERE `doctorid`='$doctorid'";
        // echo $sql;exit;
        $result = mysqli_query($con,$sql); 
        echo"<script>alert('Deletion successfull');window.location='doctorview.php';</script>";  
    } 
    ?>