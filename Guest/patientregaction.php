<?php
include("config.php"); 
if(isset($_POST['submit']))
{
$pname=$_POST["name"];
$gender=$_POST["gender"];
$housename=$_POST["housename"];
$district=$_POST["drpdistrict"];
$location=$_POST["location"];
$pin=$_POST["pin"];
$contact=$_POST["contact"];
$pemail=$_POST["email"];
// $padhar=$_POST["adhar"];
$dob=$_POST["dob"];
$username=$_POST["username"];
 $password=$_POST["password"];
//$sql=mysqli_query($con,"SELECT ifnull(count(*),0)+11 as count FROM tblpatient");
//$display=mysqli_fetch_array($sql);
//$id=$display['count'];
//$password="cust$id#@0";
$message=$_POST["message"];
$sql=mysqli_query($con,"SELECT count(*) as count FROM tbldoctor WHERE contact='$contact'");
  		$display=mysqli_fetch_array($sql);
  		if($display['count']>0)
		{			
			echo "<script>alert('Already exist');window.location='doctorview.php'</script>";	
		}
        else
//$departmentid=$_SESSION['did'];
    $sql=mysqli_query($con,"INSERT INTO tblpatient(patientname,gender,housename,district,location,pin,contact,email,dob,health_description,username,password,opstatus)VALUES('$pname','$gender','$housename','$district','$location','$pin','$contact','$pemail','$dob','$message','$username','$password','pending')");
    // echo"INSERT INTO tblpatient(patientname,gender,housename,district,location,pin,contact,email,adhar,dob,description,username,password,opstatus)VALUES('$pname','$gender','$housename','$district','$location','$pin','$contact','$pemail','$padhar','$dob','$message','$username','$password','pending')";
   // $bodyContent="Dear $pname Your account has been successfully created, Please 
    //login using the username $pname and Password $password";
    //$mailtoaddress=$pemail;
   // require('./Mailtemplate.php'); 
    echo"<script>alert('REGISTERD SUCCESFULLY');window.location='patientlogin.php'</script>";
}
    ?>