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
                            <?php 
                            
                    $doctorid=$_GET["docid"]; 
                    $s=1;
                    $sql=mysqli_query($con,"SELECT * FROM `tbldoctor` WHERE `doctorid`=$doctorid");
                    $display=mysqli_fetch_array($sql);
                            ?>
                            <form action="" method="post">
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputEmail3" name="txtdocname" value="<?php echo $display['name'];?>">
                                    </div>
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Qualification</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputEmail3" name="txtdocqn" value="<?php echo $display['qualification'];?>">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="inputEmail3" name="txtdocemail" value="<?php echo $display['email'];?>">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Contact</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputEmail3" name="txtdocphn" value="<?php echo $display['contact'];?>">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Description</label>
                                    <div class="col-sm-10">
                                        <input type="area" class="form-control" id="inputEmail3" name="txtdocdesc" value="<?php echo $display['description'];?>">
                                    </div>
                                </div>
                            
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Join Date</label>
                                    <div class="col-sm-10">
                                        <input type="date" class="form-control" id="inputEmail3" name="txtdate" value="<?php echo $display['joindate'];?>">
                                    </div>
                                </div>
                    
                    
                                <button type="submit" class="btn btn-primary" name="btnsubmit">Save</button>
                            </form>
                        </div>
                    </div>
</div>
</div>
</div>
<?php
    if(isset($_POST['btnsubmit']))
    {
        
        $docname=$_POST["txtdocname"];
        $docqn=$_POST["txtdocqn"];
        $docemail=$_POST["txtdocemail"];
        $docphn=$_POST["txtdocphn"];
        $docdesc=$_POST["txtdocdesc"];
        $docdate=$_POST["txtdate"];
        $sql = "UPDATE `tbldoctor` SET  `name`='$docname',`qualification`='$docqn',`email`='$docemail',`contact`='$docphn',`description`='$docdesc',`joindate`='$docdate' WHERE `doctorid`='$doctorid'";
        // echo $sql;
        $result = mysqli_query($con,$sql); 
        if($result>0){
        echo"<script>alert('Updation successfull');window.location='doctorview.php';</script>";  
        }
    } 
    include("footer.php");
    ?>