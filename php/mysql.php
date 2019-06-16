<?php
// 连接数据库
	$host="localhost";
	$Sqlusername="admin";
	$Sqlpassword="542624047.";
	$dbname="admin";
	//连接
	global $conn;
	/*$conn=@mysql_connect($host,$Sqlusername,$Sqlpassword) or die(mysql_error());
	mysql_query("set names gbk");
	@mysql_select_db($dbname,$conn)or die (mysql_error);
	//无效代码
	*/
	$conn= new mysqli($host,$Sqlusername,$Sqlpassword,$dbname);/*第一次创建数据库不需要最后选择表项 （）*/
	if($conn->connect_error){
		die("连接失败".$conn->connect_error);
	}
	echo "<script>console.log('Connect complete.')</script>";

//创建数据库
$userSql="CREATE DATABASE admin default character set utf8";
if($conn->query($userSql)==TRUE){
	echo '<script>console.log("创建数据库成功.")</script>';
}else{
	echo '<script>console.log("Error creating database:"'.$conn->error.')</script>';
}
//已创建成功  连接就可以了
//创建表
$tbSql="CREATE TABLE memInfo(
id INT(12) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name TEXT NOT NULL,
sex TEXT NOT NULL,
school TEXT NOT NULL,
studyId VARCHAR(30) NOT NULL,
QQ VARCHAR(30) NOT NULL,
tel VARCHAR(30) NOT NULL,
username TEXT NOT NULL,
last TEXT NOT NULL,
interest TEXT NOT NULL,
skills TEXT NOT NULL,
perCom TEXT NOT NULL,
selfAchieve TEXT NOT NULL,
group1 TEXT NOT NULL,
group2 TEXT NOT NULL,
yorn VARCHAR(10) NOT NULL,
pho TEXT NOT NULL,
sub_date TIMESTAMP
)";

$conn->query("use admin;");

//判断表是否建立
if($conn->query($tbSql)===TRUE){
	echo '<script>console.log("Table has been created.")</script>';
}else{
	echo '<script>console.log("error:"'.$conn->error.')</script>';
}
// 已创建则注释掉此部分

function close(){
	global $conn;
	$conn->close();
}
?>