<?php

//---------variables--------
$input = '     A        ';
$input_filter = trim($input);
$input_ASCII = ord($input_filter);
$input_len = strlen($input_filter);
$small_letter =  ( $input_ASCII >= ord('a')) && ( $input_ASCII <= ord('z') && ($input_len == 1 ));
$capital_letter =  ( $input_ASCII >= ord('A')) && ( $input_ASCII <= ord('Z') && ($input_len == 1 ));

//----- if condition to get next character ----
//---- small_letter ---
if( $small_letter ){
   if(  $input_ASCII == ord('z')){
     echo 'a';
   }
   else {
     echo chr($input_ASCII+1);
   }
}
//------- capital_letter
else if( $capital_letter){
   if(  $input_ASCII == ord('Z')){
     echo 'A';
   }
   else {
     echo chr($input_ASCII+1);
   }
}

else{
  echo '<h4>please enter one character only</h4>';
}
 ?>
