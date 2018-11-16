<?php
header("Content-type:text/html;charset=utf-8");
   echo "I'm Iron Man!";
   echo "<br>";
   $kouhao="I'm Iron Man!";
   echo $kouhao;
   echo "<br>";
   $age=20;
   echo $age;
   echo "<br>";
   var_dump($kouhao);
   var_dump($age);
   $student=array(
   	        'name'=>'张蕊',
   	        'age'=>30,
   	        'address'=>'山西太原',
   	        'phoneNumber'=>'123456');
   var_dump($student);
   echo '<pre>';
   echo $student['age'];
   $age=30;
   echo $age;

?>