<?php
	//PHP处理文件上传
	echo "<pre>";
	print_r($_FILES);
	echo "<pre>";
	//1、获取上传的文件信息
	// $file = $_FILES['upFile'];

	//2、如果文件上传失败
	
	$errorInfo = '';
	if($_FILES['upFile']['error'] > 0)
	{
		switch($_FILES['upFile']['error'])
		{
			case 1:
				$errorInfo = '文件超过了 php.ini中upload_max_filesize选项限制的值。';
				break;
			case 2:
				$errorInfo = '文件超过表单中max_file_size选项指定的值。';
				break;
			case 3:
				$errorInfo = '文件只有部分被上传。';
				break;
			case 4:
				$errorInfo = '没有文件被上传。';
				break;
			case 6:
				$errorInfo = '找不到临时文件夹。';
				break;
			case 7:
				$errorInfo = '文件写入失败。';
				break;
		}
		echo $errorInfo;
		exit;
	}

	//如果文件上传没有出现错误的话
	

	//判断文件是否是通过HTTP POST上传的。  is_uploaded_file()
	if(is_uploaded_file($_FILES['upFile']['tmp_name']))
	{
		//将上传的文件从临时文件夹移动到指定的位置。 move_uploaded_file()
		
		// 将$_FILES['upFile']['name']从utf-8编码转换为gb2312编码，这样在上传中文文件名时，就不会出现乱码问题了。
		$filename = iconv('utf-8','gb2312',$_FILES['upFile']['name']);

		if(move_uploaded_file($_FILES['upFile']['tmp_name'],'./uploads/'.$filename))
		{
			echo "恭喜你，上传成功！";
		}
		else
		{
			echo "很遗憾，上传失败！";
		}

	}
?>