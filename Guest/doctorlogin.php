<?php
include("header.php");
include("config.php");
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
                                        <h2>DOCTOR LOGIN</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Section Tittle  -->
                        <form id="contact-form" action="doctorloginaction.php" method="POST">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-box subject-icon mb-30">
                                        <input type="email" name="email" placeholder="Username">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-box subject-icon mb-30">
                                        <input type="password" name="password" placeholder="Password">
                                    </div>
                                </div>
                               
                                    <div class="submit-info">
                                        <button class="btn" type="submit" name="submit">Login Now <i class="ti-arrow-right"></i></button><br><br>
                                        <!-- <p>Have no account ,<a href="patientreg.php" style="color:blue"> Please register </a></p> -->
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
            <img src="assets/img/patient reg pic.webp" alt="" width="650" height="500" style="position:absolute; top:105px;">
        </div>
    </div>
    <!-- Contact form End -->
    <?php
   
    include("footer.php");
    ?>