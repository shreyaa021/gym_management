<?php
require '../../include/db_conn.php';
page_protect();
    
    $t =$_SESSION['userid'] ;
   $id =$_POST['login_id'];
   $user= $_POST['full_name'];
   $pas=$_POST['password'];
   
   
    
    $query1="update users set username='".$id."',Full_name='".$user."',pass_key='".$pas."' where userid=".$t."";

   if(mysqli_query($con,$query1)){
     
            echo "<html><head><script>alert('Routine Updated Successfully');</script></head></html>";
            echo "<meta http-equiv='refresh' content='0; url=logout.php'>";  
   }
   else{
    echo "<html><head><script>alert('ERROR! Update Opertaion Unsucessfull');</script></head></html>";
    echo "error".mysqli_error($con);
   }
    

?>

