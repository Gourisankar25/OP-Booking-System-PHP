<?php
include("header.php")
?>
<!-- <div class="container-xxl position-relative bg-white d-flex p-0"> -->
<div class="content">
<div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                       <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">DEPARTMENT REGISTRATION</h6>
                            <form action="departmentregaction.php" method="post" enctype="multipart/form-data">
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputEmail3" name="dename" title="Must enter a valid name" required>
                                    </div>
                                
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Description</label>
                                    <div class="col-sm-10">
                                        <input type="area" class="form-control" id="inputEmail3" name="dedesc" title="Must enter description" required>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">IMAGE</label>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control" id="file-upload" name="txt_image" required>
                                        <br>
                                        <br>
                                    </div>
                                    
                                <button type="submit" class="btn btn-primary">Register</button>
                            </form>
                        </div>
                    </div>
</div>
</div>
</div>
<!-- </div> -->
<?php
include("footer.php")
?>