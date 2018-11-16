<?php

  $arr =array(
              'mocba'=>array('0'=>'mukeba','1'=>'www.mocba.com'),
              'google'=>array('0'=>'google search','1'=>'www.google.com')
  	);
  echo '<pre>';
  print_r($arr);
  echo '</pre>';
  echo 'location is :'.$arr['mocba']['1'];
?>