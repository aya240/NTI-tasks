
<?php
require 'connection.php';
  $id = $_GET['id'];

//--------- start check id ---------------
 $sql = "select * from blog where id = $id ";
 $data = mysqli_query($con,$sql);

  if( mysqli_num_rows($data) == 1){

     $sql = "delete from blog where id = $id";
     $op  = mysqli_query($con,$sql);
     if($op){
        $message =  "Raw Deleted";
     }else{
        $message =  'Error try Again';
     }

  }else{
       $message =  "Invalid Id ";
  }
//------- end check id ----------

   $_SESSION['message'] = $message;

   header("location: data.php");


?>
