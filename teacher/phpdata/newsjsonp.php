<?php
//接收前端传入的函数名
//isset():检测括号里面的变量或者是否存在，返回布尔值。
$fnname = isset($_GET['callback'])?$_GET['callback']:'hehe';//函数名
$news = array(
    array('title'=>'阿古斯迪欧桂经理发计划的空间规划法规','date'=>'2020-9-14'),
    array('title'=>'阿斯蒂芬阿斯蒂芬阿斯蒂芬','date'=>'2020-9-14'),
    array('title'=>'地方个梵蒂冈','date'=>'2020-9-14'),
    array('title'=>'投入研发股份的回复高鸿股份','date'=>'2020-9-14'),
    array('title'=>'地方个人头热也有特约特意','date'=>'2020-9-14'),
    array('title'=>'阿古斯迪欧桂经理发计划的空间规划法规','date'=>'2020-9-14'),
    array('title'=>'阿斯蒂芬阿斯蒂芬阿斯蒂芬','date'=>'2020-9-14'),
    array('title'=>'地方个梵蒂冈','date'=>'2020-9-14'),
    array('title'=>'投入研发股份的回复高鸿股份','date'=>'2020-9-14'),
    array('title'=>'地方个人头热也有特约特意','date'=>'2020-9-14')
);

echo $fnname.'('.json_encode($news).')';