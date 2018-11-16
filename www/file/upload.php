<?php 
	require('file.func.php');
	$result = upload('upFile','./uploads');
	
	echo  $result['info'];
?>