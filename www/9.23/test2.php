<?php 
     function cal($x,$y)
     {
        $a=$x+$y;
        echo $a;
     }
     echo cal(2,3);
     function i($pram,$is_dump=false)
     {
     	if($is_dump)
     	{
            var_dump($pram);
            return;
     	}
        if(is_scalar($pram))
        {
        	echo $pram;
        	echo "<br>";

        }
        if(is_array($pram))
        {
        	echo "<pre>";
        	print_r($pram);
        	echo "</pre>";
        }
     }
     $r =array(4,5,6);
     i($r);
     i('hin强');
     i($r,true);
?>