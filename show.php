<?php
header("content-type:text/html;charset=utf8");




$sql="select * from liuyan";


$pdo=new \PDO("mysql:host=127.0.0.1;dbname=dayexam","root","root");

$res=$pdo->query($sql)->fetchAll();
foreach ($res as $key => $value) {
	   
	 $data[$key]['id']=$res[$key]['id']; 
	 $data[$key]['user']=$res[$key]['user'];
	 $data[$key]['title']=$res[$key]['title'];
	 $data[$key]['content']=$res[$key]['content'];
	 $data[$key]['date']=$res[$key]['date'];
}




?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>

<center>
<?php

foreach ($data as  $value) { ?>

<table>
	<tr>
		<td>用户名</td>
		<td><?php echo $value['user']?></td>
	</tr>
	<tr>
		<td>标题</td>
		<td><?php echo $value['title']?></td>
	</tr>
	<tr>
		<td>内容</td>
		<td><?php echo date("Y-m-d H:i:s",$value['date'])?></td>
	</tr>
	<tr>
		<td>时间</td>
		<td></td>
	</tr>
   <tr>
		<td>删除</td>
		<td><a href='delete.php?id=<?php echo $value['id']?>'>删除</a></td>
	</tr>
  
</table>

<?php } ?>
</center>
</body>
</html>
