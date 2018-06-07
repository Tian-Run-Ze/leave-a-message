<?php

header("content-type:text/html;charset=utf8");




$user=$_POST['user'];
$title=$_POST['title'];
$content=$_POST['content'];
$date=time();



$pdo=new \PDO("mysql:host=127.0.0.1;dbname=dayexam","root","root");

$sql="insert into liuyan(user,title,content,date) values('$user','$title','$content','$date')";

// var_dump($sql);die;
$res=$pdo->exec($sql);
if($res)
{

	// echo "<script>alert('添加成功');location.href='show.php'</script>";
	 echo "添加成功 3s跳转";
	 // header("Location:show.php");
	 header('Refresh:3,Url=show.php');
}else{
	echo "添加失败";
	 header('Refresh:3,Url=liuyan.php');
}














