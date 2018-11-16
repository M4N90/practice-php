<?php
  header("Content-type:text/html;charset=utf-8");
  $name='清清';
  echo "My name is{$name}";
  echo "<br>";
  echo 'My my name is$name';
  echo "<br>";//单引号中用单引号时要在之前加
  $age=20;
  echo "My name is {$name},,I'm{$age}years old.";
  echo "<br>";
  $x=10;
  $y=20;
  echo "$x+$y=".($x+$y);
?>