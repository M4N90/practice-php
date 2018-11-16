<?php
	//图像缩略功能
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