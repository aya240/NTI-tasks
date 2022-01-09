<?php

 //--------------- function to check char -------
function check_char( $char){
  $char = strtolower($char);
    $check = 0;
  for( $i=0 ; $i < strlen($char) ; $i++){
    $result = ( (ord($char[$i]) >= ord("a"))&&(ord($char[$i])<= ord("z")) || ( $char[$i] === ' ' ) );
    if( $result ){
      continue;
    }
    else{
      $check = 1;
      break;
    }
  }
  return $check;
}
//-------------end of function------
//---------- start clean fun------

function clean ( $var ){
    $var = trim(strip_tags($var));
    return $var;
}
//----------- end clean fun------

$errors = [];

if( $_SERVER['REQUEST_METHOD'] == 'POST'){
  $title  = clean($_POST['title']);
  $content = clean($_POST['content']);
   $allowed_extension = [ 'jpg' , 'gif' , 'png']; 

//--------error of title-----
  if( empty($title) ){
    $errors['title_required'] = "your title is required" ;
  }
  else{
    $title_type = check_char($title);
    if($title_type){
      $errors['title_type'] = "enter chars only" ;
    }

    }
//----------end error of title------

//---------- start content error------
if( empty($content)){
  $errors['content_reqired'] = 'your content is required';
}
else{
  $content_type = check_char($content);
  if($content_type){
    $errors['content_type'] = 'your content_type should be  chars only';
  }
  if( strlen($content) <= 50 ){
    $errors['content_len'] = 'your content_length should be more than 50 chars';
  }

}
//-----------end address error--------
    
//----------start image error-----------
    
    if( empty($_FILES['image']['name'])){
        $errors['image'] = 'your image is required';
            echo $_FILES['image']['name'];

    }else{
          $image = $_FILES['image']['name'];
          $temppath = $_FILES['image']['tmp_name'];
        $extension = explode( '.' , $image);
        $imgextension = strtolower(end($extension));
        if( in_array( $imgextension , $allowed_extension )){
            $final = rand() . time() . '.' . $imgextension;
            $path = './u' . $final;
            if(move_uploaded_file ( $temppath , $path)){
                echo 'error try again';
            }else{
                echo " image uploaded" ;
            }
            
        }else{
            $errors['imageextension'] = 'extension not allowed';
        }
    }
    
//---------- end image error------------ 
    
if(count($errors) >0){
    foreach($errors as $key => $val ){
      echo '<p style="color:#800">*' . $key .': ' . $val .'</p>';
    }
  }
    else{
      echo '<p style="color:#080">valid data</p>';
        $data = fopen( 'data.txt' , 'a');
        $all = $title . ',' . $content . ',' . $final ."\n" ;
        fwrite( $data , $all);
        fclose($data);
    }    

}


?>







<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <form method='post' action='<?php echo $_SERVER['PHP_SELF'] ?>' enctype="multipart/form-data" style=" width:60%; margin:50px auto;" >
                                                                                                       
                                                                                                     
  <div class="form-group">
    <label for="exampleFormControlInput1">Title</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter your title" name='title'>
  </div>
          
  <div class="form-group">
    <label for="exampleFormControlTextarea1">content</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name='content' placeholder="Enter your content"></textarea>
  </div>
  
   <div class="form-group">
    <label for="exampleFormControlInput1">image</label>
    <input type="file" class="form-control" id="exampleFormControlInput1"  name='image'>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>