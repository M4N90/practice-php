<?php
     header('content-type:text/html;charset=utf-8');
     $a=$_POST['a'];
     $b=$_POST['b'];
     $x=$_POST['x'];
     function cal($a,$b,$x)
     {
     	
     	$result = 0;
     	switch ($x) 
     	{
     		case '+':
     			$result = $a + $b;# code...
     			break;
     		case '-':
     			$result = $a - $b;# code...
     			break;
     		case '*':
     	          $result = $a * $b;# code...
     			break;
     		case '/':
     			$result = $a / $b;# code...
     			break;
     	}
     	return $result;
     		
     }
     $result=cal($a,$b,$x);
     header ("Location:./work1.php?r={$result}");

     
?>
