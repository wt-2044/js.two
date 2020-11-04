<?php
//设置字符编码。
header('content-type:text/html;charset=utf-8');

//后端不存在跨越
//让后端获取，直接给前端。
// $taobao = file_get_contents('https://suggest.taobao.com/sug?code=utf-8&q=aaa&_ksTS=1600325355223_311');
// echo $taobao;


//公司要求制作jsonp接口
$fnname = isset($_GET['callback'])?$_GET['callback']:'fn';
$taobao = file_get_contents('https://suggest.taobao.com/sug?code=utf-8&q=aaa&_ksTS=1600325355223_311');
echo $fnname.'('.$taobao.')';