<?php
	require_once'connect.php';
	$prod_id=$_GET['id'];
	$prod = mysqli_query($mysql, "SELECT * FROM `object` WHERE `id`='$prod_id'");
	$prod = mysqli_fetch_assoc($prod);

?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTD-8">
	<title>ОБНОВЛЕНИЕ БАЗЫ</title>
</head>
<style>
		p {
			text-shadow: black 0 0 1px;
			color:#50c878;
		}
		input {
		background: #f5f5dc; 
		padding: 1px; 
	   }
</style>
<body>
	<h3>ОБНОВЛЕНИЕ БАЗЫ</h3>
	<form action="uptwo.php" method="post">
		<input type="hidden" name="id" value="<?=$prod['id']?>">
		<p>Наименование</p>
		<input type="text" name="name" value="<?=$prod['name']?>">
		<p>Преподаватель</p>
		<input type="text" name="teacher" value="<?=$prod['teacher']?>">
		<p>Факультет</p>
		<input type="text" name="faculty" value="<?=$prod['faculty']?>">
		<p>Кол-во лекций</p>
		<input type="number" name="lecture" value="<?=$prod['lecture']?>">
		<p>Кол-во ЛР</p>
		<input type="number" name="lr" value="<?=$prod['lr']?>"><br><br>
		<button type="sumbit">Редактирование дисциплины</button>
		</form>
</body>
</html>