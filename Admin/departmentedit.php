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
                            <h6 class="mb-4">DEPARTMENT REGISTRATION</h6>
                            <?php 
                            
                    $deptid=$_GET["depid"]; 
                    $s=1;
                    $sql=mysqli_query($con,"SELECT * FROM `tbldepartment` WHERE `deptid`=$deptid");
                    $display=mysqli_fetch_array($sql);
                            ?>
                            <form action="" method="post">
                            <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputEmail3" name="dename" 
                                        value="<?php echo $display["deptname"] ?>"
                                        placeholder="department name">
                                    </div>
            
                                
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Description</label>
                                    <div class="col-sm-10">
                                        <input type="area" class="form-control" id="inputEmail3" name="dedesc" 
                                        value="<?php echo $display ["deptdescription"] ?>"
                                        placeholder="department name">
                                    </div>
                                </div>
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
       
        $depname=$_POST["dename"];
        $depdesc=$_POST["dedesc"];
        $sql = "UPDATE `tbldepartment` SET `deptname`='$depname',`deptdescription`='$depdesc' WHERE `deptid`='$deptid'";
        // echo $sql;exit;
        $result = mysqli_query($con,$sql); 
        echo"<script>alert('Updation successfull');window.location='departmentview.php';</script>";  
    } 
    include("footer.php");
    ?>
