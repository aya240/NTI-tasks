<?php
require 'db.php';

class edit{


 public function data($id){    
    $d_b = new D_B();
 $sql = "select * from blog where id = $id";
  $op  = $d_b->doQuery($sql);

 return $op;
 }

}

?>
 
 
 
 
 
 
 
 
 
 

         
         