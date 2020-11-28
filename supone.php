<?php
	require_once'connect.php';
	$prod_id=$_GET['id_group'];
	$prod = mysqli_query($mysql, "SELECT * FROM `groupa` WHERE `id_group`='$prod_id'");
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
	<form action="suptwo.php" method="post">
		<input type="hidden" name="id_group" value="<?=$prod['id_group']?>">
		<p>Название группы</p>
		<input type="text" name="name_group" value="<?=$prod['name_group']?>">
		<p>Факультет</p>
		<input type="text" name="faculty_group" value="<?=$prod['faculty_group']?>"><br><br>
		<button type="sumbit">Редактировать</button>
		</form>
</body>
</html>