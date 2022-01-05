<?php
//--------------- function to check char -------
function check_char( $char){
  $check = 0;
  for( $i=0 ; $i < strlen($char) ; $i++){
    $result = ((ord($char[$i]) >= ord("a"))&&(ord($char[$i])<= ord("z"))) || ((ord($char[$i]) >= ord("A"))&&(ord($char[$i])<= ord("Z")));
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

$errors = [];
if( $_SERVER['REQUEST_METHOD'] == 'POST'){
  $name  = $_POST['name'];
  $email = $_POST['email'];
  $password= $_POST['password'];
  $address = $_POST['address'];
  $url = $_POST['url'];

//--------error of name-----
  if( empty($name) ){
    $errors['name_required'] = "your name is required" ;
  }
  else{
    $name_type = check_char($name);
    if($name_type){
      $errors['name_type'] = "enter chars only" ;
    }

    }
//----------end error of name------

//-------- start error of email------
if(empty($email)){
  $errors['email_required'] = 'please enter your email';
}elseif( ( strpos($email , '@') == NULL) && ( strpos($email , '.com') == NULL) ){
  $errors['email_type'] = 'please enter correct email';

}
//-------- end error of email--------

//----------error of password------
if( empty($password)){
  $errors['password_required'] = "your password is required";
}
elseif( strlen($password) < 6){
    $errors['password_len'] = 'your password should be >= 6';

}
//---------- end error of password----

//---------- start address error------
if( empty($address)){
  $errors['address_reqired'] = 'your address is required';
}
else{
  $address_type = check_char($address);
  if($address_type){
    $errors['address_type'] = 'your address_type should be  chars only';
  }
  if( strlen($address) != 10 ){
    $errors['address_len'] = 'your address_length should be 10 chars';
  }

}
//-----------end address error--------

//---------- start url error-----------
if( empty($url)){
  $errors['email_required'] = 'please enter your linkedin url';
}elseif( ( ( strpos($url , 'http://') == NULL) || ( strpos($url , 'https://') == NULL) ) && ( strpos($url , '.com') == NULL) ){
  $errors['url_type'] = 'please enter correct url';
}

//---------- end url error--------------

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Register</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Register</h2>
  <div><?php
  if(count($errors) >0){
    foreach($errors as $key => $val ){
      echo '<p style="color:#800">*' . $key .': ' . $val .'</p>';
    }
  }
    else{
      echo '<p style="color:#080">valid data</p>';
    }


   ?>
  </div>

  <form   action="<?php  echo  $_SERVER['PHP_SELF'];?>"  method="post">

  <div class="form-group">
    <label >Name</label>
    <input type="text" class="form-control" id="exampleInputName"  name="name"  placeholder="Enter Name">
  </div>

  <div class="form-group">
    <label >Email address</label>
    <input type="text"   class="form-control" id="exampleInputEmail1" name="email"  placeholder="Enter email">
  </div>

  <div class="form-group">
    <label > Password</label>
    <input type="password"   class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
  </div>

  <div class="form-group">
    <label >Address</label>
    <input type="text"   class="form-control" id="exampleInputEmail1" name="address" placeholder="Enter your address">
  </div>

  <div class="form-group">
    <label>Linkedin url</label>
    <input type="text"   class="form-control" id="exampleInputEmail1" name="url"  placeholder="Enter your link">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

 <a href="http://localhost/group10/action.php?id=20130299">User Details</a>

</body>
</html>
