<?php
include("header.php");
include("config.php");
?>
    <div class="content">
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-6">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">DISTRICT LIST</h6>
                    <a href="districtreg.php"><button type="button" class="btn btn-primary m-2" align="right">Add New</button></a><br>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">District Name</th>
                               
                    
                                <th scope="col">Edit</th>
                                
                                <th scope="col">Delete</th>
                                
                            </tr>
                            
                        </thead>
                       
                        <tbody>
                            
                           
                        <?php
                        $s=1;
                                    $sql=mysqli_query($con,"SELECT * FROM tbldistrict");
                                    // console.log($sql);
                                    while($display=mysqli_fetch_array($sql))
                                    {
                                    echo "<tr>";
                                    echo"<td>".$s++."</td>";
                                    echo "<td>".$display["districtname"]."</td>";
                                    ?>

                                   
                                      
                            <td><a href="districtedit.php?districtid=<?php echo $display["districtid"]  ?>"><button type="button" class="btn btn-outline-success m-2" >Edit</button></a></td>
               
                           <td><a onclick="return confirm('Are You Sure to Delete this Record?')"  href="districtdelete.php?districtid=<?php echo $display["districtid"]  ?>"><button type="button" class="btn btn-outline-danger m-2"  >Delete</button></td>    
                                 
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