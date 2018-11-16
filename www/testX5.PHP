<?php
header("content-type:text/html;charset=utf-8");
    $i=0;
    $sum=0;
    while ($i<=4) 
    {
    	$sum+=$i;
    	$i++;# code...
    }
    echo $sum;
    echo '<br>';
    $i=0;
    $sum=0;
    for ($i=0; $i <=99 ; $i++) 
    { 
    	$sum+=$i;# code...
    }
    echo $sum;
    $a=0;
    $b=0;
    if ($a=0|| $b=3){
    	$a++;
    	$b++;
    }
    echo $a.".".$b;
    echo "<br>";
    $a=0;
    $b=0;
    if($a=3||$b=3){
    	$a++;
    	$b++;
    }
         echo $a.".".$b;
         echo "<br>";
    $a=20;
    if($a%2)
    {
         echo "奇数";
    }
    else
    {
         echo "偶数";
    }
         echo "<br>";

         echo ($x%2)?'奇数':'偶数';
         echo "<br>";
    $x=1;
    $x+=10;
         echo $x;
         echo "<br>";
    $bool = true;
         echo $bool ?'ok':'no';
         echo "<br>";
         echo !$bool?'ok':'no';
         echo "<br>";
    $bb=23;
    $cc=$bb++ + $bb++;
         echo $cc;
         echo "<br>";
         
         echo "<br>";
    $aa=23;
    $dd=++$aa + ++$aa;
         echo $dd;
         echo "<br>";
         echo $aa;

    
?>