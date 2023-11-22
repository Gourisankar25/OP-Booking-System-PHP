<?php
include("header.php")
?>
<!-- <div class="container-xxl position-relative bg-white d-flex p-0"> -->
<div class="content">
<div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                       <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">DISTRICT REGISTRATION</h6>
                            <form action="districtaction.php" method="post">
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputEmail3" name="txtdistrictname">
                                    </div>
                                </div>
                                <!-- <div class="row mb-3">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Category Description</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" id="inputPassword3">
                                    </div>
                                </div> -->
                                <button type="submit" class="btn btn-primary">Save</button>
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