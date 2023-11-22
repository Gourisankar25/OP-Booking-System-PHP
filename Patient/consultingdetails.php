<?php
include("header.php");
include("config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
</head>
<body>
<section>
  <!--for demo wrap-->
  <h1><b>CONSULTING DETAILS</b></h1>
  <div class="tbl-header">


    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th>#</th>
          <th>Department</th>
          <th>Doctor</th>
          <th>Booking Date</th>
          <th>Description</th>
          
        </tr>
      </thead>
    </table>
  </div>
  <div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="0">
      <tbody>
       <?php
       $s=1;
       $patientid=$_SESSION['patientid'];
       $sql=mysqli_query($con,"SELECT * from tblopdetails o inner join tbldepartment d on o.departmentid=d.deptid inner join tbldoctor do on o.doctorid=do.doctorid where patientid='$patientid'");
       while($display=mysqli_fetch_array($sql)){
    ?>

        <tr>
          <td><?php echo $s++ ?></td>
          <td><?php echo $display["deptname"] ?></td>
          <td><?php echo $display["name"] ?></td>
          <td><?php echo $display["bookingdate"] ?></td>
          <td><?php echo $display["pat_description"] ?></td>
        </tr>
       <?php
       }
       ?>
      </tbody>
    </table>
  </div>
</section>


<!-- follow me template -->
<!-- <div class="made-with-love">
  Made with
  <i>♥</i> by
  <a target="_blank" href="https://codepen.io/nikhil8krishnan">Nikhil Krishnan</a>
</div> -->
</body>
</html>



<?php
    include("footer.php");
    ?>