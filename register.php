<?php

//用户输入到数据库的参数
$username=$_POST["username"];
$password=$_POST["password"];

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
	$str="insert into wowo (username,password) values('".$username."','".$password."');";
	$result=mysql_query($str);
	echo mysql_affected_rows();
	echo "0";
}



//关闭数据
mysql_close($conn);
?>