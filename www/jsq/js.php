<?php

	//$_POST
	// echo "<pre>";
	// print_r($_POST);
	// echo "</pre>";

	// 获取表单提交的数据
	$numone = $_POST['numone'];  //获取第一个数，同时赋值给变量$numone
	$operator = $_POST['operator'];  //获取运算符，同时赋值给变量$operator
	$numtwo = $_POST['numtwo'];  //获取第二个数，同时赋值给变量$numtwo

	//修复bug

	//判断输入的值是否为空

	if($numone == '')
	{
		header("Location:./index.php?error=第一个数不能为空！");
		exit;
	}

	if($numtwo == '')
	{
		header("Location:./index.php?error=第二个数不能为空！");
		exit;
	}

	// 判断输入的值是否为数值

	if(!is_numeric($numone))
	{
		header("Location:./index.php?error=第一个数不合法！");
		exit;
	}

	if(!is_numeric($numtwo))
	{
		header("Location:./index.php?error=第二个数不合法！");
		exit;
	}

	//实现运算功能
	$result = 0;
	switch($operator)
	{
		case '+':
			$result = $numone + $numtwo;
			break;
		case '-':
			$result = $numone - $numtwo;
			break;
		case '*':
			$result = $numone * $numtwo;
			break;
		case '/':
			if($numtwo == 0)
			{
				header("Location:./index.php?error=除数不能为0！");
				exit;
			}
			$result = $numone / $numtwo;
			break;
	}

	// echo $result;
	
	header("Location:./index.php?r={$result}");
?>