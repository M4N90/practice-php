<html>
<head>
  <title>这是个计算网页</title>
  <style>.red{color:red;}</style>
</head>
<body>
    <form action="test1.php" method="POST">
         <input type='text' name="a" placeholder="first num">
         <select name="x">
				<option value="+">+</option>
				<option value="-">-</option>
				<option value="*">*</option>
				<option value="/">/</option>
			</select>
         <input type="text" name="b" placeholder="sec num">
         =
         <input type="text" value="<?php echo isset($_GET['r'])  ? $_GET['r'] : ''; ?>">
         <input type="submit" name="运算">
         <?php echo isset($_GET['error'])?"<span class='red'>{$_GET['error']}</span>":"";
         ?>
    </form>
</body>
</html>