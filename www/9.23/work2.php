<?php
header('content-type:text/html;charset=utf-8');
    $a = $_POST['num'];
    function yzm($a)
    {
      $char="fCghi45jklmopDEGqrab6F78cdest12n39ABHIJKLMNOPQRST";
      $psw=" ";
      for ($i=0; $i <$a ; $i++) { 
      	$psw= substr($char,mt_rand(0,strlen($char)-1),$a);# code...
      }
      return $psw;
    }
    $psw=yzm($a);
    header("Location:./work3.php?r={$psw}");
?>