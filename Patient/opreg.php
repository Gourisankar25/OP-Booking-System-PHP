<?php


include("header.php");
include("config.php");
?>
     <!--? Contact form Start -->
     <div class="contact-form-main">
<?php
$patientid=$_SESSION['patientid'];
//echo $patientid;
$sql=mysqli_query($con,"SELECT * FROM tblpatient where patientid='$patientid'");
 $display=mysqli_fetch_array($sql);
 $opstatus=$display['opstatus'];
 $sql=mysqli_query($con,"SELECT count(*) as count FROM tblpatient where patientid='$patientid' and opstatus='OP registered'");
 $display1=mysqli_fetch_array($sql);

 if($display1['count']>0) 
 {

    // echo "SELECT * FROM tblpatient where patientid='$patientid' and opstatus='OP registered'";
    echo "<script>alert('You have already registered');window.location='index.php'</script>";
 }
 else
 {
?>
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-xl-7 col-lg-7">
                    <div class="form-wrapper">
                        <!--Section Tittle  -->
                        <div class="form-tittle">
                            <div class="row ">
                                <div class="col-xl-12">
                                    <div class="section-tittle section-tittle2">
                                        <span>OP REGISTRATION FORM</span>
                                        <h2>Form</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Section Tittle  -->
                        <form id="contact-form" action="opregaction.php" method="POST">
                            <div class="row">
                                 <div class="col-lg-6 col-md-6">
                                    <div class="form-box user-icon mb-30">

                                        <?php
                            $sql=mysqli_query($con,"select * from tbldepartment");
                            ?>
                            <select name="drpdepartment" id="drpdepartment" class="form-control" onchange="populate()"  style="width:500px;padding-bottom: 1px;
                            height: 54px;margin-left: -15px;" >
                            <option value="0">---Department---</option>
                            <?php
                            while($row=mysqli_fetch_array($sql))
                              {
                            ?>

                            <option value="<?php echo $row['deptid']; ?>"> <?php echo $row['deptname'];?> </option>
                            <?php
                             }
                            ?>

                            </select>

                </div>
                         <div id="chkboxContainer">

                            <select name="drname" id="drname" class="form-control" style="width:500px;" >
                                <option value="-1" selected>---Doctor---</option>
                            
                            </select><br>
                            </div>
                        </div>
                                </div>
                               
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-box subject-icon mb-30">
                                        <input type="area" name="description" placeholder="Enter your health issues">
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
}
    include("footer.php");
    ?>

    <script>
	function populate()
	{
       // alert("hello");
		var val=document.getElementById('drpdepartment').value;
		//alert(val);
		$.ajax({
			type: "POST",
			url: "getplant.php",
			data: "id="+val,
			
			success: function(data)
            {
				$("#chkboxContainer").html(data);
			}
		})
	}

//     function populate() {
// 	 	var val=document.getElementById('drpdepartment').value;
// 	 	var select=document.getElementById('drname');

//         var text = "";

//         $.ajax({
//             type: "POST",
//             url: "getplant.php",
//             dataType: "json",
//             data: "id="+val,

// alert(data);


//             success: function(rslt) {
//                 $("#chkboxContainer").html(rslt);
//                 for(var id in rslt){
//                     var name = rslt[id];                    
//                     console.log(id);
//                     console.log(name);
//                 }
//                 console.log(select.options.length)
//                 select.innerHtml = text;
//             },
//             error: function(err){
//                 console.log(JSON.stringify(err, null, 2));
//             }
//         });
//     }
	</script>
