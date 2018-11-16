<?php  
  function getDirSize($dir)
  {
     $size = 0;
     $handle = opendir($dir);
     while($filename=readedir($handle))
     {
        if($filenam != '.'&&$filename!='..')
        {
           $file = $dir.'/'.$filenames;
           if(is_file($file))
           {
             $size += filesize($file);
           }
           if(is_dir($file))
           {
           	$size += getDirSize($file);
           }
        }
     }
     return $size;
  }
  $path = '../code';
  echo getDirSize($path);
?>