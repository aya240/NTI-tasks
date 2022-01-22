<?php 

class DB{

  var $db_server = 'localhost';
  var $db_user = 'root';
  var $db_password = '';
  var $db_name = 'blog';

  var $con = null;

      function __construct(){

        $this->con =   mysqli_connect($this->db_server,$this->db_user,$this->db_password,$this->db_name);
        if(!$this->con){
            die("Error : ".mysqli_connect_error());
        }
      }

       
       function doQuery($sql){
           
          $result = mysqli_query($this->con,$sql);
          return $result;
       }


      function __destruct(){
         return  mysqli_close($this->con);
      }

}


?>