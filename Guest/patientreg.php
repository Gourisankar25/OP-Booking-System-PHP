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
                                        
                                        <h2>Patient Registration</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Section Tittle  -->
                        <form id="contact-form" action="patientregaction.php" method="POST">
                            <div class="row">
                            <div class="col-lg-6 col-md-6">
                                    <div class="form-box user-icon mb-30">
                                        <input type="text" name="name" placeholder="Name"   title="Must enter a  valid name"  required >
                                        <!-- pattern="^[A-Za_z][A-Za-z -]+$" -->
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div>
                                    <input type="radio" name="gender" value="Male" style="height: 12px;">Male
                                    </div>
                                    <div>
                                    <input type="radio" name="gender" value="Female" style="height: 12px;">Female
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-box user-icon mb-30">
                                        <input type="text" name="housename" placeholder="House Name" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-box subject-icon mb-30">
                                        
                                        <?php
                            $sql=mysqli_query($con,"select * from tbldistrict");
                            ?>
                            <select name="drpdistrict" class="form-control"   style="width:500px;" >
                            <option value="0">---District---</option>
                            <?php
                            while($row=mysqli_fetch_array($sql))
                              {
                            ?>
                            <option value="<?php echo $row['districtid'] ?>"> <?php echo $row['districtname'];?> </option>
                            <?php
                             }
                            ?>
                            </select><br>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-box subject-icon mb-30">
                                        <input type="text" name="location" placeholder="Location" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-box subject-icon mb-30">
                                        <input type="text" name="pin" placeholder="Pincode" pattern="[0-9]{6}"  required >
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-box email-icon mb-30">
                                        <input type="text" name="contact" placeholder="Phone"  maxlength="10"  required >
                                    </div>
                                </div>
                              
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-box subject-icon mb-30">
                                        <input type="Email" name="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="must enter a valid email address" required>
                                    </div>
                                </div>
                                <!-- <div class="col-lg-6 col-md-6">
                                    <div class="form-box subject-icon mb-30">
                                        <input type="text" name="adhar" placeholder="Adhar Number" pattern="^\d{4}\s\d{4}\s\d{4}$" required >
                                    </div>
                                </div> -->
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-box subject-icon mb-30">
                                        <input type="date" name="dob" placeholder="Date of Birth" required>
                                    </div>
                                </div>
                                
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-box subject-icon mb-30">
                                        <input type="text" name="username" placeholder="Username" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-box subject-icon mb-30">
                                        <input type="password"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" name="password" placeholder="Password" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required >
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-box message-icon mb-65">
                                        <textarea name="message" id="message" placeholder="Description" required></textarea>
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
            <img src="assets/img/gallery/contact_form.png" alt="" >
        </div>
    </div>
    <!-- Contact form End -->
    <?php
    if(isset($_POST['submit']))
    {
    $pname=$_POST["name"];
    $gender=$_POST["gender"];
    $housename=$_POST["housename"];
    $district=$_POST["drpdistrict"];
    $location=$_POST["location"];
    $pin=$_POST["pin"];
    $contact=$_POST["contact"];
    $pemail=$_POST["email"];
    $padhar=$_POST["adhar"];
    $dob=$_POST["dob"];
    $username=$_POST["username"];
    // $password=$_POST["password"];
    $sql=mysqli_query($con,"SELECT ifnull(count(*),0)+11 as count FROM tblpatient");
    $display=mysqli_fetch_array($sql);
    $id=$display['count'];
    $password="cust$id#@0";
    $message=$_POST["message"];

    //$departmentid=$_SESSION['did'];
    
        $sql=mysqli_query($con,"INSERT INTO tblpatient(patientname,gender,housename,district,location,pin,contact,email,adhar,dob,description,username,password,opstatus)VALUES('$pname','$gender','$housename','$district','$location','$pin','$contact','$pemail','$padhar','$dob','$message','$username','$password','pending')");
        // echo"INSERT INTO tblpatient(patientname,gender,housename,district,location,pin,contact,email,adhar,dob,description,username,password,opstatus)VALUES('$pname','$gender','$housename','$district','$location','$pin','$contact','$pemail','$padhar','$dob','$message','$username','$password','pending')";
        $bodyContent="Dear $pname Your account has been successfully created, Please 
        login using the username $pname and Password $password";
        $mailtoaddress=$pemail;
        require('./Mailtemplate.php'); 
        //echo"<script>alert('REGISTERD SUCCESFULLY');window.location='patientlogin.php'</script>";
    }
    include("footer.php");
    ?>