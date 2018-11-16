<?php
     $d="凡凡的智商：";
     $a=7;
   
     function test()
     {
     	global $d;
     	echo $d;
     	echo  "<br>";
     	echo $GLOBALS["a"];
     }
     test();
     function de()
     {
     	
     	return ;
     	echo 1;
     }
     de();
?>