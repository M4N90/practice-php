<?php
	
	//封装文件上传
	     /**
	          * upload——文件上传
	 	* @param string $upFile  上传input控件name属性对应的值
	 	* @param string $path   指定上传位置
	 	* @param array $allowExt  指定允许上传文件的类型
		* @return array  array('result'=>false,'info'=>'')
	    */

	function upload($upFile,$path,$allowExt=array('image/gif','image/png','image/jpeg'))
	{
		if($_FILES[$upFile]['error'] > 0)
		{
			switch($_FILES[$upFile]['error'])
			{
				case 1:
					return array('result'=>FALSE,'info'=>'文件超过了 php.ini中upload_max_filesize选项限制的值。');
					break;
				case 2:
					return array('result'=>FALSE,'info'=>'文件超过表单中max_file_size选项指定的值。');
					break;
				case 3:
					return array('result'=>FALSE,'info'=>'文件只有部分被上传。');
					break;
				case 4:
					return array('result'=>FALSE,'info'=>'没有文件被上传。');
					break;
				case 6:
					return array('result'=>FALSE,'info'=>'找不到临时文件夹。');
					break;
				case 7:
					return array('result'=>FALSE,'info'=>'文件写入失败。');
					break;
			}
		}

		
		if(!in_array($_FILES[$upFile]['type'],$allowExt))
		{
			return array('result'=>FALSE,'info'=>'上传文件不允许！');
		}


		//如果文件上传没有出现错误的话
		
		//判断文件是否是通过HTTP POST上传的。  is_uploaded_file()
		if(is_uploaded_file($_FILES[$upFile]['tmp_name']))
		{
			//将上传的文件从临时文件夹移动到指定的位置。 move_uploaded_file()
			
			// 将$_FILES['upFile']['name']从utf-8编码转换为gb2312编码，这样在上传中文文件名时，就不会出现乱码问题了。
			$filename = iconv('utf-8','gb2312',$_FILES[$upFile]['name']);

			$fileinfo = pathinfo($filename);

			$filename = md5(uniqid(mt_rand())).'.'.$fileinfo['extension'];

			if(move_uploaded_file($_FILES[$upFile]['tmp_name'],$path.'/'.$filename))
			{
				return array('result'=>TRUE,'info'=>'恭喜你，上传成功！');
			}
			else
			{
				return array('result'=>FALSE,'info'=>'很遗憾，上传失败！');
			}

		}
	}

	$allowExt = array('image/png','text/plain');
	$result = upload('userfile','uploads',$allowExt);
	// print_r($result);
	if($result['result'])
	{
		echo $result['info'];
	}
	else
	{
		echo $result['info'];
	}
?>
