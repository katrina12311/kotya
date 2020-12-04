<!doctype html>
<html>
<head>
	<meta charset="UTD-8">
	<title>Расписание экзаменов</title>
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
			<th>Группа</th>
			<th>Предмет</th>
			<th>Дата консультации</th>
			<th>Дата экзамена</th>
			<th>Аудитория</th>
			<th><a href="tadddop.php">Добавить</a></th>
		</tr>
		<?php
			require_once 'connect.php';

			$prod = mysqli_query($mysql,"SELECT
				rasp.id_rasp,
				rasp.date_cons,
				rasp.date_ex,
				rasp.aud,

				groupa.name_group as group_name,

				object.name as object_name

				FROM rasp
				LEFT JOIN object ON rasp.id=object.id
				LEFT JOIN groupa ON rasp.id_group=groupa.id_group"
			);

			$stud = mysqli_fetch_array($prod);

			$rasp_id = $stud['id_rasp'];
			$date_cons = $stud['date_cons'];
			$date_ex = $stud['date_ex'];
			$aud = $stud['aud'];
			$group_name = $stud['group_name'];
			$object_name = $stud['object_name'];

			$date_cons = date('d.m.Y', strtotime($date_cons));
			$date_ex = date('d.m.Y', strtotime($date_ex));
		?>
		<tr>
			<td><?= $rasp_id?></td>
			<td><?= $group_name?></td>
			<td><?= $object_name?></td>
			<td><?= $date_cons?></td>
			<td><?= $date_ex?></td>
			<td><?= $aud?></td>
			<td><a href="tupone.php?id_rasp=<?=$rasp_id?>">Обновить</a></td>
			<td><a style="color: red" href="tdelete.php?id_rasp=<?=$rasp_id?>">Удалить</a></td>
		</tr>
		
		</table>
		<br><a style="color: #50c878" href=" menu.php">Вернуться в меню</a>
</body>
</html>