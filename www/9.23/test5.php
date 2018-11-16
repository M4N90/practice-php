<?php
     function filiter($func)
     {
     	for($i=0;$i<=100;$i++)
     	{
     		if($func($i))
     		{
     			continue;
     	   	}
     	   	echo $i."<br>";
     	}
     }
     function one($i)
     {
     	return $i%3 ==0;
     }
     function two($i)
     {
     	return strrev($i)==$i;
     }
     filiter("one");
     filiter("two");
?>