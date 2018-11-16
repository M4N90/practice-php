<?php
     $arr = array('name'=>'jj',
                  'sex'=>'male',
                  'age'=>'13');
     echo "<pre>";
     print_r($arr);
     echo "</pre>";
     echo "My name is ".$arr['name'].". I'm ".$arr['age'].' years old.';
     $arr4 =array(
     	         array('name'=>'jaychou','age'=>'18'),
     	         array('name'=>'andy liu','age'=>'11')
     	         );
     echo '<pre>';
     print_r($arr4);
     echo '</pre>';
     echo $arr4[1]['name'];
?>