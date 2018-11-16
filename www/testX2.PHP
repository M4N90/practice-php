<?php
	header('content-type:text/html;charset=utf-8');

	$a=0;
	$b=0;
	if($a=3 || $b=3){
		$a++;
		$b++;
	}

	echo $a.".".$b;

	echo "<br>";
	// 转换字符串
		// 布尔型->字符串型：true->字符串 '1'，false->''。