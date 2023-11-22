<?php
include("config.php"); 
    $depname=$_POST["dename"];
    $depdesc=$_POST["dedesc"];
    
    $loc= "images/";
	$img=$_FILES['txt_image'] ['name'];
	move_uploaded_file($_FILES['txt_image']['tmp_name'],$loc.$img);

        $sql=mysqli_query($con,"SELECT count(*) as count FROM tbldepartment WHERE deptname='$depname'");
  		$display=mysqli_fetch_array($sql);
  		if($display['count']>0)
		{			
			echo "<script>alert('Already exist');window.location='departmentview.php'</script>";	
		}
		else {
        $sql=mysqli_query($con,"insert into tbldepartment(deptname,deptdescription,deptimg)values('$depname','$depdesc','$img')");
        // echo"insert into tbldepartment(deptname,deptdescription,deptimage)values('$depname','$depdesc','$img')";
        echo"<script>alert('REGISTERD SUCCESFULLY');window.location='departmentview.php'</script>";
    }
    ?>