<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>switch语句案例：自动显示代表当天星期几的图片</title>
		<style>
			.box{
				width: 500px;
				height: 500px;
				position: absolute;
				top:50%;
				left: 50%;
				margin-left:-250px;
				margin-top: -250px;
			}
		</style>
	</head>
	<body>
		<div class="box">
			<img src=<?php
    $n = date('N');
    switch($n)
    {
    	case '1': echo "./week/monday.jpg";
    	    break;
    	case '2': echo "./week/tuesday.jpg";
    	    break;
    	case '3': echo "./week/wendesday.jpg"; 
    	    break;      
    	case '4': echo "./week/thursday.jpg";
    		break;
    	case '5': echo "./week/friday.jpg";
    	    break;
    	case '6': echo "./week/saturday.jpg";
    		break;
    	case '7': echo "./week/sunday.jpg";
    		break;
    	default:
    	          echo '________';

    } 
?>
  >
		</div>
	</body>
</html>