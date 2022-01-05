<?php

$input = '   c   ';
$input_filter = trim($input);
$input_len = strlen($input_filter);
if( $input_len == 1 ){
  $input_filter++;
  echo $input_filter[0] ;
}
else{
  echo ' <h4 style= "color:#d00"> please enter one character only</h4>';
}






$small_letter = letters('a' , 'z');
//$capital_letter = letters( ord('A') , ord('Z'));


function letters( $start , $end){
  $letter = NULL;
  for ( $i= $start ; $i<= $end ; $i++ ){
$letter .= $i ;
  }
 return $letter ;
}

echo $small_letter;
/*
echo $small_letter ;
-------------explain-------
output :
abcdefghijklmnopqrstuvwxyz
aaabacadaeafagahaiajakalamanaoapaqarasatauavawaxayaz
babbbcbdbebfbgbhbibjbkblbmbnbobpbqbrbsbtbubvbwbxbybz
cacbcccdcecfcgchcicjckclcmcncocpcqcrcsctcucvcwcxcycz
dadbdcdddedfdgdhdidjdkdldmdndodpdqdrdsdtdudvdwdxdydz
eaebecedeeefegeheiejekelemeneoepeqereseteuevewexeyez
fafbfcfdfefffgfhfifjfkflfmfnfofpfqfrfsftfufvfwfxfyfz
gagbgcgdgegfggghgigjgkglgmgngogpgqgrgsgtgugvgwgxgygz
hahbhchdhehfhghhhihjhkhlhmhnhohphqhrhshthuhvhwhxhyhz
iaibicidieifigihiiijikiliminioipiqirisitiuiviwixiyiz
jajbjcjdjejfjgjhjijjjkjljmjnjojpjqjrjsjtjujvjwjxjyjz
kakbkckdkekfkgkhkikjkkklkmknkokpkqkrksktkukvkwkxkykz
lalblcldlelflglhliljlklllmlnlolplqlrlsltlulvlwlxlylz
mambmcmdmemfmgmhmimjmkmlmmmnmompmqmrmsmtmumvmwmxmymz
nanbncndnenfngnhninjnknlnmnnnonpnqnrnsntnunvnwnxnynz
oaobocodoeofogohoiojokolomonooopoqorosotouovowoxoyoz
papbpcpdpepfpgphpipjpkplpmpnpopppqprpsptpupvpwpxpypz
qaqbqcqdqeqfqgqhqiqjqkqlqmqnqoqpqqqrqsqtquqvqwqxqyqz
rarbrcrdrerfrgrhrirjrkrlrmrnrorprqrrrsrtrurvrwrxryrz
sasbscsdsesfsgshsisjskslsmsnsospsqsrssstsusvswsxsysz
tatbtctdtetftgthtitjtktltmtntotptqtrtstttutvtwtxtytz
uaubucudueufuguhuiujukulumunuoupuqurusutuuuvuwuxuyuz
vavbvcvdvevfvgvhvivjvkvlvmvnvovpvqvrvsvtvuvvvwvxvyvz
wawbwcwdwewfwgwhwiwjwkwlwmwnwowpwqwrwswtwuwvwwwxwywz
xaxbxcxdxexfxgxhxixjxkxlxmxnxoxpxqxrxsxtxuxvxwxxxyxz
yaybycydyeyfygyhyiyjykylymynyoypyqyrysytyuyvywyxyyyz
*/

/*

$check_small= strpos( $small_letter , $input) ;
$check_capital = strpos( $capital_letter , $input);

echo is_NULL($check_small);
if( is_NULL($check_small))
{
    echo $small_letter[$check_small+1];

}
*/
