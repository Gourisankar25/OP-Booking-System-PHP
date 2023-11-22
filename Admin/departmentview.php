<?php
include("header.php");
include("config.php");
?>
    <div class="content">
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-12">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">DEPARTMENT LIST</h6>
                    <a href="departmentreg.php"><button type="button" class="btn btn-primary m-2" align="right">Add New</button></a><br>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Department Name</th>
                                <th scope="col">Department Description</th>
                                <th scope="col">Department Image</th>
                                <th scope="col">Edit</th>
                                
                                <th scope="col">Delete</th>
                                
                            </tr>
                            
                        </thead>
                       
                        <tbody>
                            
                           
                        <?php
                        $s=1;
                                    $sql=mysqli_query($con,"SELECT * FROM tbldepartment");
                                    // console.log($sql);
                                    while($display=mysqli_fetch_array($sql))
                                    {
                                    echo "<tr>";
                                    echo"<td>".$s++."</td>";
                                    echo "<td>".$display["deptname"]."</td>";
                                    echo "<td>".$display["deptdescription"]."</td>";
                                    echo "<td><img src='images/".$display["deptimg"]."' height='80' width='80'/></td>";
                                    ?>
                                    <td><a href="departmentedit.php?depid=<?php echo $display["deptid"]  ?>"><button type="button" class="btn btn-outline-success m-2"  >Edit</button></a></td>
                                    <td><a onclick="return confirm('Are You Sure to Delete this Record?')"  href="departmentdelete.php?depid=<?php echo $display["deptid"]  ?>"> <button type="button" class="btn btn-outline-danger m-2" >Delete</button></a></td>  
                                    
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