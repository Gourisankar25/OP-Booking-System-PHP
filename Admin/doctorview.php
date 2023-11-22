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
                    <h6 class="mb-4">Doctor Details View</h6><br>
                    <p>Choose department:</p>
                    <?php
                        $sql=mysqli_query($con,"select * from tbldepartment");
                        ?>
                        <select name="drpdepartment" class="form-control"  onchange="this.form.submit()"  style="width:500px;" >
                        <option value="0">---Select---</option>
                        <?php
                        while($row=mysqli_fetch_array($sql))
                        {
                        ?>
                        <option value="<?php echo $row['deptid'] ?>"> <?php echo $row['deptname'];?> </option>
                        <?php
                        }
                        ?>
                        </select><br>
                        <br>
                        </form>
                        <?php 
                        if(isset($_POST['drpdepartment']))
                        {
                            $did=$_POST['drpdepartment'];
                            $_SESSION['did']=$did;
                        
                        ?>
                    <h6 class="mb-4">DOCTOR LIST</h6>
                    <a href="doctorreg.php"><button type="button" class="btn btn-primary m-2" align="right">Add New</button></a><br>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                              
                                <th scope="col">Name</th>
                                <th scope="col">Image</th>
                                <th scope="col">Qualification</th>
                                <th scope="col">Email</th>
                                <th scope="col">Contact</th>
                                <th scope="col">Description</th>
                                <th scope="col">Join Date</th>
                    
                                <th scope="col">Edit</th>
                                
                                <th scope="col">Delete</th>
                                
                            </tr>
                            
                        </thead>
                       
                        <tbody>
                            
                           
                        <?php
                        $s=1;
                                    $sql=mysqli_query($con,"SELECT * FROM tbldoctor WHERE deptid='$did'");
                                    // console.log($sql);
                                    while($display=mysqli_fetch_array($sql))
                                    {
                                    echo "<tr>";
                                    echo"<td>".$s++."</td>";
                                    
                                    echo "<td>".$display["name"]."</td>";
                                    echo "<td><img src='images/".$display["docimg"]."' height='80' width='80'/></td>";
                                    echo "<td>".$display["qualification"]."</td>";
                                    echo "<td>".$display["email"]."</td>";
                                    echo "<td>".$display["contact"]."</td>";
                                    echo "<td>".$display["description"]."</td>";
                                    echo "<td>".$display["joindate"]."</td>";
                                    ?>
                                    <td><a href="doctoredit.php?docid=<?php echo $display["doctorid"]  ?>"><button type="button" class="btn btn-outline-success m-2"  >Edit</button></a></td>
                                    <td><a onclick="return confirm('Are You Sure to Delete this Record?')"  href="doctordelete.php?docid=<?php echo $display["doctorid"]  ?>"> <button type="button" class="btn btn-outline-danger m-2" >Delete</button></a></td>  
                                    
                                    </tr>

                                    <?php
                                    
                                }
                                    
                                    ?>


                        </tbody>
                       
                              
                                 
                      
                    </table>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    </div>
<?php
include("footer.php");
?>