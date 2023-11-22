<?php
include("header.php");
include("config.php");
?>
<?php
$doctorid=$_GET['doctid'];
$sql1=mysqli_query($con,"SELECT * FROM tbldoctor where doctorid='$doctorid'");
// echo "SELECT * FROM tbldoctor where doctorid='$doctorid'";
$display1=mysqli_fetch_array($sql1);
$_SESSION['doctid']=$doctorid;
$_SESSION['deptid']=$display1['deptid'];
if($display1['docter_status']=='Absent'){
    echo "<script>alert('Docter not available');window.location='docters.php'</script>";
}else{
$patientid=$_SESSION['patientid'];
$sql=mysqli_query($con,"SELECT * FROM tblpatient where patientid='$patientid'");
$display=mysqli_fetch_array($sql);
if($display['opstatus']=='OP registered'){
?>
<!--? Contact form Start -->
<div class="contact-form-main">

<div class="container">
    <div class="row justify-content-end">
        <div class="col-xl-7 col-lg-7">
            <div class="form-wrapper">
                <!--Section Tittle  -->
                <div class="form-tittle">
                    <div class="row ">
                        <div class="col-xl-12">
                            <div class="section-tittle section-tittle2">
                                <span>Make your appointment</span>
                                <h2>Appointment Form</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Section Tittle  -->
                <form id="contact-form" action="appointmentaction.php" method="POST">
                        <div class="col-lg-6 col-md-6">
                        <div class="form-box subject-icon mb-30">
                                <input type="date" name="opdate" min="<?php echo date('Y-m-d') ?>">
                            </div>
                            <div class="form-box subject-icon mb-30">
                                <input type="area" name="description" placeholder="Description">
                            </div>
                        </div>
                            
                            <div class="submit-info">
                                <button class="btn" type="submit" name="submit">Submit Now <i class="ti-arrow-right"></i> </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- contact left Img-->
<div class="from-left d-none d-lg-block">
    <img src="assets/img/gallery/contact_form.png" alt=""  width="650" height="500" style="position:absolute; top:105px;">
</div>
</div>
<!-- Contact form End -->
<?php
}else 
{
    echo "<script>alert('Please register OP and make your appointment');windows.location='departments.php'</script>";
}
?>
<?php
}       
include("footer.php");
?>


