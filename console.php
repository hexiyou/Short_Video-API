<?php 
require 'API.php';

if(empty($argv[1])){
    echo "缺少参数，请输入要解析的URL！\n";
    exit(1);
}else{
    $url=trim($argv[1]);
}

echo \API::findURL($url);
