<?php
//得到用户输入过来参数
$username=$_POST["username"];

//连接数据库
$conn=mysql_connect("127.0.0.1","root","");
//打开数据库
mysql_select_db("test");
// 执行sql
$sql="select * from wowo where username='".$username."'";
$result=mysql_query($sql);
if (mysql_num_rows($result)) {
	echo "1";
}else{
	echo "0";
}


//关闭数据
mysql_close($conn);