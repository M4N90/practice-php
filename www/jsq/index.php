<?php

	// print_r($_GET);
	// if(isset($_GET['r']))
	// {
	// 	echo $_GET['r'];
	// }

	// echo isset($_GET['r'])  ? $_GET['r'] : '';
	
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>综合案例：简易计算器 </title>
		<style>
			.red{color:red;}
		</style>
	</head>
	<body>
		<form action="js.php" method="POST">
			<input type="text" name="numone" placeholder="第一个数">
			<select name="operator">
				<option value="+">+</option>
				<option value="-">-</option>
				<option value="*">*</option>
				<option value="/">/</option>
			</select>
			<input type="text" name="numtwo" placeholder="第二个数">
			=
			<input type="text" value="<?php echo isset($_GET['r'])  ? $_GET['r'] : ''; ?>">
			<input type="submit" value="计算">
			<?php 
				echo isset($_GET['error']) ? "<span class='red'>{$_GET['error']}</span>" : ""; 
			?>
		</form>
	</body>
</html>