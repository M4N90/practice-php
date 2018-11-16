<!DOCTYPE html>
<html>
<head>
	<title>可以生成验证码哟</title>
</head>
<body>
      <form action="work2.php" method="POST">
            给小爷一个字符串的长度
            <input type="text" name="num" placeholder="在这里填好！"><br></br>
            不改就点这里-->
            <input type="submit" value="确认">
            <br>
            </br>
            拿好你的字符串！
            <input type="text" value="<?php echo isset($_GET['r']) ?$_GET['r']:'';?>">
            <?php
                 echo isset($_GET['error'])?"{$_GET['error']}":"";
            ?>
      </form>
</body>
</html>
