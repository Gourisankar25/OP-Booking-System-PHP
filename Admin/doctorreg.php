<?php
include("header.php");
include("config.php"); 
?>
<!-- <div class="container-xxl position-relative bg-white d-flex p-0"> -->
<div class="content">
<div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                       <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">DOCTOR REGISTRATION</h6>
                            <form action="" method="POST" enctype="multipart/form-data">
                                <div class="row mb-3">
                                
                                   
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputEmail3" name="txtdocname"  title="Must enter a  valid name"  required>
                                    </div>
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Qualification</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputEmail3" name="txtdocqn" title="Must enter Qualification details"  required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Gender</label>
                                    <div class="col-sm-10">
                                    <div>
                                    <input type="radio" name="gender" value="Male" style="height: 12px;">Male
                                    </div>
                                    <div>
                                    <input type="radio" name="gender" value="Female" style="height: 12px;">Female
                                    </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="inputEmail3" name="txtdocemail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="must enter a valid email address" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="txtdocphn" class="col-sm-2 col-form-label">Contact</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputEmail3" name="txtdocphn"  maxlength="10"  required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="txtdocdesc" class="col-sm-2 col-form-label">Description</label>
                                    <div class="col-sm-10">
                                        <input type="area" class="form-control" id="inputEmail3" name="txtdocdesc" title="Must enter description"  required>
                                    </div>
                                </div>
                            
                                <!-- <div class="row mb-3">
                                    <label for="txtdate" class="col-sm-2 col-form-label">Join Date</label>
                                    <div class="col-sm-10">
                                        <input type="date" <?php echo date('Y-m-d') ?> class="form-control" id="inputEmail3" name="txtdate"  required>
                                    </div>
                                </div> -->

                                <div class="row mb-3">
                                    <label for="file-upload" class="col-sm-2 col-form-label">IMAGE</label>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control" id="file-upload" name="txt_image">
                                    </div>
                                </div>
                    
                    
                                <button type="submit" class="btn btn-primary" name="submit">Register</button>
                            </form>
                        </div>
                    </div>
</div>
</div>
</div>
<!-- </div> -->
<?php

if(isset($_POST['submit']))
{

$docname=$_POST["txtdocname"];
$docqn=$_POST["txtdocqn"];
$gender=$_POST["gender"];
$docemail=$_POST["txtdocemail"];
$docphn=$_POST["txtdocphn"];
$docdesc=$_POST["txtdocdesc"];
$docdate=date('y/m/d');
// $doctorid=$_SESSION[''];
$departmentid=$_SESSION['did'];
$loc= "images/";
	$img=$_FILES['txt_image'] ['name'];
	move_uploaded_file($_FILES['txt_image']['tmp_name'],$loc.$img);

$sql=mysqli_query($con,"SELECT ifnull(count(*),0)+11 as count FROM tbldoctor");
$display=mysqli_fetch_array($sql);
$id=$display['count'];
$pass="doc$id#@0";

$sql=mysqli_query($con,"SELECT count(*) as count FROM tbldoctor WHERE contact='$docphn'");
  		$display=mysqli_fetch_array($sql);
  		if($display['count']>0)
		{			
			echo "<script>alert('Already exist');window.location='doctorview.php'</script>";	
		}
		else 
    $sql=mysqli_query($con,"insert into tbldoctor(deptid,name,qualification,docgender,email,contact,description,docimg,joindate,password)values('$departmentid','$docname','$docqn','$gender','$docemail','$docphn','$docdesc','$img','$docdate','$pass')");
    // echo"insert into tbldoctor(deptid,name,qualification,gender,email,contact,description,joindate,password)values('$departmentid','$docname','$docqn','$gender','$docemail','$docphn','$docdesc','$docdate','$pass')";
    // echo"<script>alert('REGISTERD SUCCESFULLY');window.location='doctorview.php'</script>";
 $result=mysqli_query($con,$sql);
 $bodyContent="Dear '$docname', Your account has been succesfully created, Please login using the Username '$docname' and Password '$pass'";
 $mailtoaddress=$docemail;
 require('Mailtemplate.php');
echo"<script>alert('REGISTERD SUCCESFULLY');window.location='doctorview.php'</script>";
}
include("footer.php");
?>