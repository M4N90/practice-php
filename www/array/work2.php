<?php
   $arr = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33];
   $arr1 = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16];
 
   $red = array_rand($arr,6);
   $blue = array_rand($arr1,1);
 
   foreach ($red as $red1){
    echo $arr[$red1]."  ";
}
 
echo "&nbsp;&nbsp;&nbsp;&nbsp;".$arr1[$blue];
?>
