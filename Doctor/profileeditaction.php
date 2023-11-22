<?php   
    include("config.php");
    session_start();
   
    
        if(isset($_POST['submit']))
        {
     $docid=$_SESSION['docterid'];
        $name=$_POST['name'];
        $mail=$_POST['email'];
        $num=$_POST['contact'];
        $joindate=$_POST['joindate'];
        $qualification=$_POST['qualification'];
        // if(empty($num))
        // {
        //   echo "<script>alert('mobile number field is empty');</script>";
        // }
        //   elseif(!preg_match("/^[0-9]{10}+$/", $num)) 
        //        {
        //       echo " Invalid Phone Number";
        //       }
      
        
        //$housename=$_POST['housename'];
        // if(preg_match("/^([0-9]{10})+$/", $num)) {
        //   echo " Valid Phone Number";
        //   } else {
        //   echo " Invalid Phone Number";
        //   }
        // $district=$_POST['drps'];
    
        // echo "hi";
        //  echo  $loc=$_POST['location'];
        // echo "UPDATE tbl_customer SET cust_name='$name',cust_email='$mail',cust_num='$num',cust_address='$address' WHERE cust_id='$id'";
         $sql=mysqli_query($con,"UPDATE tbldoctor SET name='$name',email='$mail',contact='$num',joindate='$joindate',qualification='$qualification' WHERE doctorid='$docid'");
        
        if($sql)
        {
           echo "<script>alert('Profile Updated Successfully!!');window.location='profileview.php'</script>";
        } 
    
    }  
?>