<?php
include("config.php");
$username=$_POST["txtusername"];
$password=$_POST["txtpassword"];
$sql=mysqli_query($con,"Select * from tbladminlogin");
$row=mysqli_fetch_array($sql);
if(($row['username']==$username && $row['password']==$password))
{
header("Location:../Admin/index.php");
}
else
{
echo "<script>alert('invalid user');window.location='adminlogin.php'</script>";
}
?>