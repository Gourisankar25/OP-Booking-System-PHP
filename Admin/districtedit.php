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
                            <h6 class="mb-4">DISTRICT REGISTRATION</h6>
                            <?php 
                if(isset($_GET["districtid"]))
                {
                    $disid=$_GET["districtid"]; 
                    $s=1;
                    $sql=mysqli_query($con,"SELECT * FROM tbldistrict where districtid=$disid");
                    $display=mysqli_fetch_array($sql);
                }
 ?>
                            <form action="" method="post">
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputEmail3" name="txtdistrictname" value="<?php echo $display["districtname"] ?>" placeholder="district name">
                                    </div>
                                </div>
                                <!-- <div class="row mb-3">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Category Description</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" id="inputPassword3">
                                    </div>
                                </div> -->
                                <button type="submit" name="btnsubmit" class="btn btn-primary">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
</div>
<!-- </div> -->


<?php
    if(isset($_POST['btnsubmit']))
    {
       
        $disname=$_POST["txtdistrictname"];
        $sql = "UPDATE `tbldistrict` SET `districtname`='$disname' WHERE `districtid`='$disid'";
        // echo $sql;exit;
        $result = mysqli_query($con,$sql); 
        echo"<script>alert('Updation successfull');window.location='districtview.php';</script>";  
    } 
    include("footer.php");
    ?>