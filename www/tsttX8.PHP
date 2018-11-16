<?php
   header('content-type:text/html;charset=utf-8');
   echo "第三种";
   echo "<table border='1' width='600'>";
   for($i=1;$i<=9;$i++)
   {
   	  echo "<tr>";
   	  for($k=0;$k<9-$i;$k++)
   	  {
   	  	echo "<td></td>";
   	  }
   	  for($j=$i;$j>=1;$j--)
   	  {
   	  	echo "<td>{$i}*{$j}=".($i*$j)."</td>";
   	  }
   	  echo "</tr>";
   }
   echo "</table>";
?>