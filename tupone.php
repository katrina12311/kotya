<?php
	require_once'connect.php';
	$prod_id=$_GET['id_rasp'];
	$prod = mysqli_query($mysql, "SELECT * FROM `rasp` WHERE `id_rasp`='$prod_id'");
	$prod = mysqli_fetch_assoc($prod);

?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTD-8">
	<title>Редактирование</title>
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
	<h3>Редактирование</h3>
	<form action="tuptwo.php" method="post">
		<input type="hidden" name="id_rasp" value="<?=$prod['id_rasp']?>">
		<p>ID Группы</p>
		<input type="text" name="id_group" value="<?=$prod['id_group']?>">
		<p>ID предмета</p>
		<input type="text" name="id" value="<?=$prod['id']?>">
		<p>Дата консультации</p>
		<input type="text" name="date_cons" value="<?=$prod['date_cons']?>">
		<p>Дата экзамена</p>
		<input type="text" name="date_ex" value="<?=$prod['date_ex']?>">
		<p>Аудитория</p>
		<input type="text" name="aud" value="<?=$prod['aud']?>"><br><br>
		<button type="sumbit">Редактировать</button>
		</form>
</body>
</html>