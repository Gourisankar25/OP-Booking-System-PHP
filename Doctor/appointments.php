<?php
include("header.php");
include("config.php");
?>


    <div class="content">
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-12">
                <div class="bg-light rounded h-100 p-4">
                <form action="" method="POST">
                    <h6 class="mb-4">APPOINTMENT REQUESTS</h6><br>
                    <input type="date" class="form-control" max="<?php echo date('Y-m-d') ?>" name="appdate" id="appdate" onchange="this.form.submit()">
                        <br>
                        
                        <?php 
                        if(isset($_POST['appdate']))
                        {
                            $did=$_POST['appdate'];
                            $_SESSION['did']=$did;
                        
                        ?>
                    <script>document.getElementById('appdate').value=<?php echo $did ?></script>
                    <h6 class="mb-4">PATIENT APPOINTMENTS</h6>
                    <!-- <a href="doctorreg.php"><button type="button" class="btn btn-primary m-2" align="right">Add New</button></a><br> -->
                    <table class="table table-striped">
                        <thead>
                            <tr>    
                                <th scope="col">#</th>
                                <th scope="col">Consulting Date</th>
                                <th scope="col">Op No:</th>
                                <th scope="col">Patient</th>
                                <th scope="col">Description</th>
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        $s=1;
                        $doctid=$_SESSION['docterid'];
                        // echo $doctid;    
                                    $sql=mysqli_query($con,"SELECT * FROM tblopdetails d inner join tblpatient p on d.patientid=p.patientid WHERE d.bookingdate='$did' and d.doctorid='$doctid' and d.op_consult_status='pending'");
                                    // echo "SELECT * FROM tblopdetails d inner join tblpatient p on d.patientid=p.patientid WHERE d.bookingdate='$did' and d.doctorid='$doctid'";
                                    // console.log($sql);
                                    while($display=mysqli_fetch_array($sql))
                                    
                                    {
                                    $opdetailid=$display['opdetailid'];
                                    
                                    echo "<tr>";
                                    echo"<td>".$s++."</td>";
                                    echo "<td>".$display["bookingdate"]."</td>";
                                    echo "<td>".$display["opnumber"]."</td>";
                                    echo "<td>".$display["patientname"]."</td>";
                                    echo "<td>".$display["pat_description"]."</td>";
                                    
                                    ?>
                                    <td><a href="appointmentaction.php?appid=<?php echo $opdetailid ?>"><button type="button" name="btnsubmit" class="btn btn-outline-success m-2"  >Consulted</button></a></td>
                                    
                                    </tr>

                                    <?php
                                    
                                }
                                    
                                    ?>


                        </tbody>
                       
                              
                                 
                      
                    </table>
                    <?php
                    }
                    ?>
                </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    
    <?php
    include("footer.php");
    ?>