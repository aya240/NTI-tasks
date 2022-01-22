
<?php
require './class/db.php';
  $id = $_GET['id'];
$db = new DB();
//--------- start check id ---------------

 $sql = "select * from blog where id = $id ";
         $op  = $db->doQuery($sql);

  if( mysqli_num_rows($op) == 1){

     $sql = "delete from blog where id = $id";
         $op  = $db->doQuery($sql);
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
