<?php
include("header.php");
?>
<main>
    
    <!--? department_area_start  -->
    <div class="department_area section-padding2">
        <div class="container">
            <!-- Section Tittle -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle text-center mb-100">
                        <span>Our Departments</span>
                        <h2>Our Medical Services</h2>
                    </div>
                </div>
            </div>
            <!-- <div class="row">
                <div class="col-lg-12">
                    <div class="depart_ment_tab mb-30"> -->
                        <!-- Tabs Buttons -->
                        <!-- <ul class="nav" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">
                                    <i class="flaticon-teeth"></i>
                                    <h4>Dentistry</h4>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">
                                    <i class="flaticon-cardiovascular"></i>
                                    <h4>Cardiology</h4>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">
                                    <i class="flaticon-ear"></i>
                                    <h4>ENT Specialists</h4>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="Astrology-tab" data-toggle="tab" href="#Astrology" role="tab" aria-controls="contact" aria-selected="false">
                                    <i class="flaticon-bone"></i>
                                    <h4>Astrology</h4>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="Neuroanatomy-tab" data-toggle="tab" href="#Neuroanatomy" role="tab" aria-controls="contact" aria-selected="false">
                                    <i class="flaticon-lung"></i>
                                    <h4>Neuroanatomy</h4>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="Blood-tab" data-toggle="tab" href="#Blood" role="tab" aria-controls="contact" aria-selected="false">
                                    <i class="flaticon-cell"></i>
                                    <h4>Blood Screening</h4>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div> -->
            <div class="dept_main_info white-bg">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <!-- single_content  -->
                        <div class="row align-items-center no-gutters">
                            <?php
                            include("config.php");
                            $sql=mysqli_query($con,"SELECT * FROM tbldepartment");
                            while($display=mysqli_fetch_array($sql))
                            {
                            ?>
                            <div class="col-lg-7">
                                <div class="dept_info">
                                    <h3><?php echo $display['deptname'] ?></h3>
                                    <p><?php echo $display['deptdescription'] ?></p>
                                    <a href="deptwisedoctors.php?deptid=<?php echo $display['deptid'] ?>" class="dep-btn">View Details<i class="ti-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="dept_thumb">
                                    <img src="../Admin/images/<?php echo $display['deptimg'] ?>" alt="" width="300" height="300">
                                </div>
                            </div>
                            <?php
                            }
                            ?>
                        </div>
                        <!-- single_content  -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- department area_end  -->
    </main>
    <?php
include("footer.php");
?>