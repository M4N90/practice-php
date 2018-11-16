<?php
    header('content-type:text/html;charset=utf-8');
    // PHP 变量类型的转换 ——强制转换

	// (int)：强转为整型
	// (float)：强转为浮点型
	// (bool)：强转为布尔型
	// (string)：强转为字符串型
	// (array)：强转为数组
	// (object)：强转为对
	$name = '10jayjun';
	var_dump((int)$name);// 字符串型->整型：字符串的开始部分决定它的值。如果该字符串以合法数值开始，则使用该数值；否则其值为0。
?>