<?php
for ($i=1;$i<=9;$i++)
{ 
for ($j=1;$j<=$i;$j++) 
	 echo "$i*$j=".$i*$j." "; 
     echo "<br>\n"; 
} 
echo "\n";
for($i=1;$i<=9;$i++)
{
for($j=9;$j>=$i;$j--)
	 echo "$i*$j=".$i*$j." ";
	 echo "<br>\n"; 
}
echo "<br>\n";
?>