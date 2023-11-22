<?php
include("config.php"); 
session_start();
    $docid=$_SESSION['doctid'];
    $sql3=mysqli_query($con,"SELECT * FROM tbldoctor where doctorid='$docid'");
    $display2=mysqli_fetch_array($sql3);
    $docname=$display2['name'];

    $patientid=$_SESSION['patientid'];
    $deptid=$_SESSION['deptid'];
    // echo $deptid;exit;
    $desc=$_POST["description"];
    $sql=mysqli_query($con,"SELECT * FROM tblopbooking where patientid='$patientid'");
    $display=mysqli_fetch_array($sql);
    $opnumber=$display['opnumber'];
   $opdate=$_POST["opdate"];

   
   $sql1=mysqli_query($con,"SELECT count(*) as count FROM tblopdetails WHERE bookingdate='$opdate' and doctorid='$docid'");
//    echo "SELECT count(*) as count FROM tblopdetails WHERE opdate='$opdate'";exit;
   $display1=mysqli_fetch_array($sql1);
   if($display1['count']>3)
   {			
    echo "<script>alert('$docname is not receiving anymore appointments today!!');window.location='index.php'</script>";	
}
else {
       // echo "insert into tblopbooking(patientid,departmentid,doctorid,description,opdate,opstatus)values('$patientid','$depname','$docname','$desc','$opdate','pending');";
       // die();
        $sql2=mysqli_query($con,"insert into tblopdetails(opnumber,patientid,bookingdate,departmentid,doctorid,pat_description,op_consult_status)values('$opnumber','$patientid','$opdate','$deptid','$docid','$desc','pending')");

    //    echo "insert into tblopdetails(opnumber,patientid,bookingdate,departmentid,doctorid,description,op_consult_status)values('$opnumber','$patientid','$opdate','$deptid','$docid','$desc','pending')";
        echo"<script>alert('APPOINTMENT SENT SUCCESFULLY');window.location='index.php'</script>";
    }
    ?>