<?php
session_start();
$db_server = 'localhost';
$db_user = 'root';
$db_password = '';
$db_name = 'blog';

$con = mysqli_connect( $db_server,$db_user , $db_password ,$db_name);
if( !($con)){
  die ('error ' . mysqli_connect_error() );
}

?>
