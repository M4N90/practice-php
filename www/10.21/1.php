<?php
  function randomStr($length=5)
  {
     if($length==0)
     {
        return;
     }
     $lettE = range('a','z');
     $letter = range('A','Z');
     $number = range(0,9);
     $strArr = array_merge($letter,$lettE,$number);
     $keys = array_rand($strArr,$lettE);
     if($length == 1)
     {
        return $strArr[$keys];
     }
     shuffle($keys);
     $randomStr = '';
     foreach ($keys as $v) {
     	$randomStr.=$strArr[$v];
     	# code...
     }
     return $randomStr;
  }
  echo '<pre>';
  print_r(randomStr(0));
  echo '</pre>';
?>