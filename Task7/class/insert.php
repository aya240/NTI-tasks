<?php
session_start();
require 'db.php';
require 'valid.php';

class blog
{
    private $title;
    private $content;


    public function add($val1, $val2 )
    {

        $validator = new Validator();
       
        $this->title     = $validator->Clean($val1);
        $this->content    = $validator->Clean($val2);

        # Validation .....
        $errors = [];

        # Validate title ...
        if (!$validator->validation($this->title, 1)) {
            $errors['title'] = 'Field Required';
        }elseif (!$validator->validation($this->title, 2)) {
            $errors['title'] = 'Invalid title should be string only';
        }

        # Validate content
        if (!$validator->validation($this->content, 1)) {
            $errors['content'] = 'Field Required';
        } elseif (!$validator->validation($this->content, 3)) {
            $errors['content'] = 'Invalid length';
        }

       
    
       # CHECK ERRORS ...   
        if (count($errors) > 0) {
            $Message = $errors;
        }else{
    
      
         # Create DB Obj ...
         $db = new DB();

         $sql = "insert into blog (title,content) values ('$this->title','$this->content')";
         $op  = $db->doQuery($sql);

         if($op){
             
        header('location: data.php');
       }else{
             $Message = ['Error Try Again !!!!!'];
         }
 
        }
      
        $_SESSION['Message'] = $Message;
    
    }



   
}

?>