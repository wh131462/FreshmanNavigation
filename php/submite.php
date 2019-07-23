<!DOCTYPE html>
<html>
<head>
<meta name="Description" content="广科大易班招新,个人信息上传"/>
<meta charset="utf-8">
<title>上传信息</title>
<link rel="shortcut icon" href="../images/logo.ico">
<style type="text/css">
	body{
		margin:0;
	}
	.returnInfo{
		text-align: center;
		width: 60%;
		margin: 0 auto;
		border: #007BFF solid 1px;
		border-radius: 5px;
	}
	a{
		text-decoration: none;
		color: #007BFF;
	}
	a:hover{
		color: #FFFFFF;
		background: #007BFF;
		border: #0062CC solid 1px;
		border-radius: 5px;
	}
</style>
</head>
<body>
<div class="returnInfo">
<?php
// 初始化
$name=$sex=$school=$studyId=$QQ=$tel=$username=$last=$interest=$skills=$perCom=$selfAchieve=$group1=$group2=$yorn=$pho="";
$err="";
//连接数据库
include_once("mysql.php");
if($_SERVER["REQUEST_METHOD"]=="POST"){
	//准备存储数据库
	$name=$_POST["name"];
	$sex=$_POST["sex"];
	$school=$_POST["school"];
	$studyId=$_POST["studyId"];
	$QQ=$_POST["QQ"];
	$tel=$_POST["tel"];
	$username=$_POST["username"];
	$last=$_POST["last"];
	$interest=$_POST["interest"];
	$skills=$_POST["skills"];
	$perCom=$_POST["perCom"];
	$selfAchieve=$_POST["selfAchieve"];
	$group1=$_POST["group1"];
	$group2=$_POST["group2"];
	$yorn=$_POST["yorn"];
	$pho=$_POST["pho"];
	
}
//图片
if($_FILES["pho"]["error"]>0){
		echo $_FILES["pho"]["error"];
	}else{
		if(($_FILES["pho"]["type"] == "image/jpeg")
	|| ($_FILES["pho"]["type"] == "image/jpg")
	|| ($_FILES["pho"]["type"] == "image/pjpeg")
	|| ($_FILES["pho"]["type"] == "image/x-png")
	|| ($_FILES["pho"]["type"] == "image/png")
	&& ($_FILES["pho"]["size"] < 20971520)){
			move_uploaded_file($_FILES["pho"]["tmp_name"],"NewMemInfo/".$_FILES["pho"]["name"]);
			$pho="NewMemInfo/".$_FILES["pho"]["name"];
			echo "图片上传成功<br>";
		}else{
			$err="未上传图片。";
		}
	}
if($err==""){
	//数据库存储
$sql="INSERT INTO memInfo(name,sex,school,studyId,QQ,tel,username,last,interest,skills,perCom,selfAchieve,group1,group2,yorn,pho) VALUES ('$name','$sex','$school','$studyId','$QQ','$tel','$username','$last','$interest','$skills','$perCom','$selfAchieve','$group1','$group2','$yorn','$pho')";

	if($conn->query($sql)==true){
		echo " 信息上传成功~<a href='../index.html'>点此返回首页</a>";
	}else{
		echo " 数据传入数据库失败~><a href='../SubInfo.html'>点此返回重新上传</a>";
	}

}else{
	echo $err."请返回重新上传图片<br><a href='../SubInfo.html'>点此返回</a>";
}
?>
</div>
</body>
</html>
