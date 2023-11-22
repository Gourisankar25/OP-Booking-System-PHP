<?php
include("config.php"); 
session_start();
    $depname=$_POST["drpdepartment"];
    $docname=$_POST["drname"];
    $desc=$_POST["description"];
    $patientid=$_SESSION['patientid'];
    $opdate=date('y/m/d');

        $sqlcount="SELECT ifnull(COUNT(*),0)+1001  as 'opnumber' FROM tblopbooking";
        $display=mysqli_query($con,$sqlcount);
        $data=mysqli_fetch_array($display);
        $customercount=$data['opnumber'];
    {
        
       // echo "insert into tblopbooking(patientid,departmentid,doctorid,description,opdate,opstatus)values('$patientid','$depname','$docname','$desc','$opdate','pending');";
       // die();
        $sql=mysqli_query($con,"insert into tblopbooking(patientid,departmentid,doctorid,opdate,description,opnumber)values('$patientid','$depname','$docname','$opdate','$desc','$customercount')");
        $sql=mysqli_query($con,"update tblpatient set opstatus='OP registered' where patientid='$patientid'");
        $sql1=mysqli_query($con,"select * from tblopbooking where patientid='$patientid'");
        $display1=mysqli_fetch_array($sql1);
        $opno=$display1['opnumber'];
        // echo $opno;exit;
        $sql=mysqli_query($con,"insert into tblopdetails(opnumber,patientid,bookingdate,departmentid,doctorid,pat_description,op_consult_status)values('$opno','$patientid','$opdate','$depname','$docname','$desc','pending')");

        // echo"insert into tbldepartment(deptname,deptdescription)values('$depname','$depdesc')";
       echo"<script>alert('COMPLETE YOUR PAYMENT');window.location='oppayment.php'</script>";
    }
    ?>