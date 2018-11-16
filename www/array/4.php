<?php
    $list = array('22','33','44');
    foreach($list as $value)
    {
      echo $value.'<br>';
    }
    foreach ($list as $k => $v) {
      echo $k.'=>'.$v.'<br>';	# code...
    }
    $users = array(
			array('name'=>'高凯','sex'=>'男','age'=>20),
			array('name'=>'李泽超','sex'=>'男','age'=>48),
			array('name'=>'陈娜','sex'=>'女','age'=>18),
			array('name'=>'李林','sex'=>'男','age'=>30)
		);
    echo '<pre>';
    print_r($users);
    echo '</pre>';
    foreach ($users as $v) {
      echo $v['name'];
      echo $v['age'];
      echo $v['sex'];
      echo "<br>";	# code...
    }
    echo '<ul>';
    foreach($users as $v){
      echo '<li>'.$v['name'].$v['age'].$v['sex'].'</li>';
    }
    echo '</ul>';
?>