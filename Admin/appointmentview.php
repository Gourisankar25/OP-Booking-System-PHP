<?php
include("header.php");
include("config.php");
?>
    <div class="content">
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-12">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">APPOINTMENT LIST</h6>
                   <!-- <a href=""><button type="button" class="btn btn-primary m-2" align="right"></button></a><br> -->
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                
                                <th scope="col">ID</th>
                                <th scope="col">Patient Id</th>
                                <th scope="col">Department Name</th>
                                <th scope="col">Doctor Name</th>
                                <th scope="col">Date</th>
                                <th scope="col">Description</th>
                                
                                <th scope="col">Accept</th>
                                
                                <th scope="col">Reject</th>
                                
                            </tr>
                            
                        </thead>
                       
                        <tbody>
                            
                           
                        <?php
                                    $sql=mysqli_query($con,"SELECT * FROM `tblopbooking` opb INNER JOIN `tbldoctor` do ON do.doctorid = opb.doctorid INNER JOIN `tbldepartment` dpt ON opb.departmentid = dpt.deptid WHERE `opstatus` = 'pending';");
                                    // console.log($sql);
                                    while($display=mysqli_fetch_array($sql))
                                    {
                                    echo "<tr>";
                                    echo "<td>".$display["opid"]."</td>";
                                    echo "<td>".$display["patientid"]."</td>";
                                    echo "<td>".$display["deptname"]."</td>";
                                    echo "<td>".$display["name"]."</td>";
                                    echo "<td>".$display["opdate"]."</td>";
                                    echo "<td>".$display["description"]."</td>";
                                    
                                    
                                    ?>
                                    <td><a href="http://localhost/HospitalOP/HospitalOP/Admin/action/opstatus.php?status=1&opid=<?php echo $display["opid"]  ?>"><button type="button" class="btn btn-outline-success m-2"  >Accept</button></a></td>
                                    <td><a href="http://localhost/HospitalOP/HospitalOP/Admin/action/opstatus.php?status=0&opid=<?php echo $display["opid"]  ?>"> <button type="button" class="btn btn-outline-danger m-2" >Reject</button></a></td>  
                                    
                                    </tr>

                                    <?php
                                    
                                }
                                    
                                    ?>


                        </tbody>
                       
                              
                                 
                      
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
<?php
include("footer.php");
?>