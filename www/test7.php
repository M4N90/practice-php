<?php 
    define('HOST','localhost');
    define('USER','root');
    define('PASSWORD','123');
    $link=@mysql_connect(HOST,USER,PASSWORD);
    var_dump($link);
    define('URL','http://www.moocba.com',true);
    echo url;
?>