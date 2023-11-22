<?php


$ret = array();

$id = $_REQUEST["id"];

include("config.php");
$sql=mysqli_query($con,"SELECT * FROM tbldoctor WHERE deptid='$id';");
?>
<div class="contact-form-main">
  <div class="container">
    <div class="row justify-content-end">
   
      <div class="row">
         <div class="col-lg-6 col-md-6">
                <div class="form-box user-icon mb-30">
                      <div id="chkboxContainer">

                            <select name="drname" id="drname"  class="my_drp">
                                <option value="0" selected>----------Select Doctor--------</option>
                            
                            
                                   <?php
                                      while($row=mysqli_fetch_array($sql))
                                        {
                                           ?>
                                       <option value="<?php echo $row['doctorid']; ?>"> <?php echo $row['name'];?> </option>
                                          <?php
                                            }
                                            ?>
                              </select><br>

                      </div>
                  </div>
            </div>
       </div>
       </div>
  
  </div>
</div>


<style>
.my_drp
{
  background: none;
height: 60px;
width: 262px;
border: 0;
  border-bottom-color: currentcolor;
  border-bottom-style: none;
  border-bottom-width: 0px;
color: #112957;
font-weight: 300;
font-size: 16px;
text-transform: capitalize;
padding-top: 3px;
border-radius: 0px;
border-bottom: 2px solid #e9f0f4;
margin-top: 30px;
}

</style>




