<?php
include("header.php");
?>
<main>
    
    <!--? Team Start -->
    <div class="team-area section-padding30">
        <div class="container">
            <!-- Section Tittle -->
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-tittle text-center mb-100">
                        <span>Our Doctors</span>
                        <h2>Our Specialist</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
                include("config.php");
                $patientid=$_SESSION['patientid'];
                $sql=mysqli_query($con,"SELECT * FROM tbldoctor d inner join tbldepartment c on d.deptid=c.deptid ");
                while($display=mysqli_fetch_array($sql))
                {
                ?>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-">
                    <div class="single-team mb-30">
                        <div class="team-img">
                            <img src="../Admin/images/<?php echo $display['docimg'] ?>" alt="" width="100" height="300">
                        </div>
                        <div class="team-caption">
                            <h3><a href="#"><?php echo $display['name']?> |STATUS| <h3 style="color:green"><?php echo $display['docter_status'] ?></h3></a></h3>
                            <span><?php echo $display['qualification'] ?></span>
                            <!-- Team social -->
                            <div class="team-social">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fas fa-globe"></i></a>
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                            </div><br>
                            <a href="appointment.php?doctid=<?php echo $display['doctorid'] ?>" class="dep-btn">Appointment<i class="ti-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
    <!-- Team End -->
    </main>
    <?php
include("footer.php");
?>