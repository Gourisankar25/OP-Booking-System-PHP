<?php
    include("header.php");
    ?>
    <div class="content-body">
        <div class="container-fluid">
        <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Edit location</h4>
                            <!-- <span class="ml-1">Element</span> -->
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Form</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Element</a></li>
                        </ol>
                    </div>
                </div>
                <?php 
                if(isset($_GET["cid"]))
                {
                    $locid=$_GET["cid"]; 
                    include("config.php");
                    $s=1;
                    $sql=mysqli_query($con,"SELECT * FROM tbllocation where locationid=$locid");
                    $display=mysqli_fetch_array($sql);
                }
                ?>
            <div class="card" style="color: blue;">
                <div class="card-header">
                    <h4 class="card-title">Location</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        <form action="locationeditaction.php?editid=<?php echo $display["locationid"]; ?>" method="POST">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Location</label>
                                    <input type="text" class="form-control" name="txt_locationname" value="<?php echo $display["locationname"] ?>" placeholder="location name">
                                </div>
                            </div>
                            <button type="submit" name="btnsubmit" class="btn btn-primary">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    include("footer.php");
    ?>