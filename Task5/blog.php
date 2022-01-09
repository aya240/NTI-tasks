<?php

$read = fopen( 'data.txt' , 'r') or die('cannot open this file');

for ( $i =0 ; !feof($read) ; $i++){
    
    $con = explode( ',' , fgets($read));
    foreach( $con as $key){
        echo '<p style="  text-align:center">' . $key . '</p>';
    
    }
    echo '<hr>' . $i;
}
       
fclose($read);



?>