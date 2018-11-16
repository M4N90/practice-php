<?php
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
	if ( ! function_exists('thumb'))
	{
		function thumb($maximage,$upload_path,$sx,$sy,$pre = "s_"){

			$image=getimagesize($maximage);//得到图片的一系列数值

			$lx=$image[0];//得到图片的宽
			$ly=$image[1];//得到图片的高

			$imagetype=$image[2];//得到图片的类型

			$imagedir=dirname($maximage); //得到文件的路径
			$imagebase=basename($maximage);//得到文件名

			$maxoutfile=$upload_path."/".$pre.$imagebase; //得到文件的保存路径和文件名

			switch($imagetype){
				case 1:
					$maxin="imagecreatefromgif";
					$maxout="imagegif";
					break;
				case 2:
					$maxin="imagecreatefromjpeg";
					$maxout="imagejpeg";
					break;
				case 3:
					$maxin="imagecreatefrompng";
					$maxout="imagepng";
					break;
			}

		    	$max=$maxin($maximage);

			$sx=$sx;   //缩放后的图片的宽高
			$sy=$sy;
		 
		 	//等比例缩放的算法，以小的为基准
			if($sy/$ly>$sx/$lx){
				$percent=$sx/$lx;
			}
			else{
				$percent=$sy/$ly;
			}

			$percentx=floor($lx*$percent);
			$percenty=floor($ly*$percent);

			$minimage=imagecreatetruecolor($percentx,$percenty);

			imagecopyresampled($minimage,$max,0,0,0,0,$percentx,$percenty,$lx,$ly);

			$maxout($minimage,$maxoutfile);
		}
	}
?>