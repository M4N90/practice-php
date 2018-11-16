<?php
	//封装文件上传
	     /**
	          * upload——文件上传
	 	* @param string $upFile  上传input控件name属性对应的值
	 	* @param string $path   指定上传位置
	 	* @param array $allowExt  指定允许上传文件的类型
		* @return array  array('result'=>false,'info'=>'')
	    */

	function upload($upFile,$path,$allowExt=array('image/gif','image/png','image/jpeg','text/plain'))
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

			$fileinfo = pathinfo($filename);//解析文件

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

	//封装文件下载
	
	    /**
	 	* downloadFile——文件下载
		* @param string $filename 下载文件的路径
	    */

	function downloadFile($filename)
	{
		header('Content-type:application/octet-stream');
		header('Content-Disposition:attachment;filename='.basename($filename));
		readfile($filename);
	}


	/**   
	     * readDirectory
	     * 遍历目录函数，只读取目录中最外层的内容
	     *@param string  $path  目录的路径
	     *@return array
	**/

	function readDirectory($path)
	{
		$info = opendir($path); //打开一个目录
		$arr = array();
		while(($handle = readdir($info)) != false)
		{
			//清除掉默认的.和..
			if($handle !='.' && $handle !='..')
			{
				if(is_file($path.'/'.$handle))
				{
					$arr['file'][] = $handle;
				}

				if(is_dir($path.'/'.$handle))
				{
					$arr['dir'][] = $handle;
				}
			}
		}
		closedir($info);
		return $arr;
	}

?>