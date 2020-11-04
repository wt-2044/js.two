<?php
header('content-type:text/html;charset=utf-8');

//连接数据库   每次需要连接数据库时,通过include "databaseconn.php"将文件连接到需要的文件内
// include "databaseconn.php"  引入公共文件的方式, 将databaseconn.php 引入进来
// new mysqli(主机名，数据库用户名，数据库密码，数据库名称)

define('HOST','localhost');//主机名
define('USERNAME','root');//数据库用户名
define('PASSWORD','');//数据库密码
define('DBNAME','js2008');//数据库名称

$conn=@new mysqli(HOST,USERNAME,PASSWORD,DBNAME);//$conn:数据库连接对象
//@:容错处理，错误信息不显示。
//自定义的错误处理
if($conn->connect_error){//满足条件，数据库连接有误。
    die('数据库连接错误'.$conn->connect_error);//退出，并输出括号里面的信息
}

//设置字符编码问题。
// $conn->query():执行括号里面的代码，可以执行sql语句。
$conn->query('SET NAMES UTF8');


