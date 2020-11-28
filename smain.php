<?php
	require_once'connect.php';

?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTD-8">
	<title>Предметы</title>
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
		th,td {
			padding:5px;
			}
		th {
			background:#50c878; 
			color:#fff;
			}
		td {
			background: #f5f5dc;
			}
</style>
<body>
	<table>
		<tr>
			<th>ID</th>
			<th>Название группы</th>
			<th>Факультет</th>
			<th><a href="sadddop.php?id=<?= $stu[0]?>">Добавить</a></th>
		</tr>
		<?php
			$stud=mysqli_query($mysql, "SELECT * FROM `groupa`");
			$stud = mysqli_fetch_all($stud);
			foreach ($stud as $stu){
				?>
				<tr>
					<td><?= $stu[0]?></td>
					<td><?= $stu[1]?></td>
					<td><?= $stu[2]?></td>
					<td><a href="supone.php?id_group=<?= $stu[0]?>">Обновить</a></td>
					<td><a style="color: red" href="sdelete.php?id_group=<?= $stu[0]?>">Удалить</a></td>
		</tr>
		<?php
			}
	
		?>
		
		</table>
		<br><a style="color: #50c878" href=" menu.php">Вернуться в меню</a>
</body>
</html>