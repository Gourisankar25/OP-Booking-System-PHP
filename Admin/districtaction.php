<?php
include("config.php"); 
    $district=$_POST["txtdistrictname"];
    
    {
        $sql=mysqli_query($con,"insert into tbldistrict(districtname)values('$district')");
        // echo"insert into tbldepartment(deptname,deptdescription)values('$depname','$depdesc')";
        echo"<script>alert('REGISTERD SUCCESFULLY');window.location='districtview.php'</script>";
    }
    ?>