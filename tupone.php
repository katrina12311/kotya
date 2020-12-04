<html>
	<?php
		require_once 'connect.php';
		$prod_id=$_GET['id_rasp'];

		$prod = mysqli_query($mysql,"SELECT
			rasp.date_cons,
			rasp.date_ex,
			rasp.aud,

			groupa.id_group as group_id,
			groupa.name_group as group_name,

			object.id as object_id,
			object.name as object_name

			FROM rasp
			LEFT JOIN object ON rasp.id=object.id
			LEFT JOIN groupa ON rasp.id_group=groupa.id_group
			WHERE id_rasp='$prod_id'"
		);

		if ($prod){
			$prod = $prod->fetch_array();

			$date_cons = $prod['date_cons'];
			$date_ex = $prod['date_ex'];
			$aud = $prod['aud'];

			$group_id = $prod['group_id'];
			$group_name = $prod['group_name'];

			$object_id = $prod['object_id'];
			$object_name = $prod['object_name'];
		}
	?>

	<head><title>Редактирование </title></head>
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
		<h3>Редактирование <?php echo "id: ".$prod_id;?></h3>
		<form action="tuptwo.php" method="post">
			<input type="hidden" name="id_rasp" value="<?=$prod_id?>">
			<?php
				$result = mysqli_query($mysql,"SELECT
					id_group,
					name_group
					FROM groupa
					WHERE id_group<>$group_id"
				);

				echo '<p style="color: #50c878">'."<br>Группа<br><br> <select name='id_group'>";
				echo "<option selected value='$group_id'>$group_name</option>";
				if ($result){
					while ($row = $result->fetch_array()){
						$id_group = $row['id_group'];
						$name_group = $row['name_group'];
						echo "<option value='$id_group'>$name_group</option>";
					}
				}
				echo "</select>";

				$result = mysqli_query($mysql,"SELECT
					id,
					name
					FROM object
					WHERE id<>$object_id"
				);

				echo '<p style="color: #50c878">'."Предмет<br><br> <select name='id'>";
				echo "<option selected value='$object_id'>$object_name</option>";
				if ($result){
					while ($row = $result->fetch_array()){
						$id = $row['id'];
						$name = $row['name'];
						echo "<option value='$id'>$name</option>";
					}
				}
				echo "</select>";
			?>
			<p>Дата консультации</p>
			<input type="date" name="date_cons" value="<?=$date_cons?>">
			<p>Дата экзамена</p>
			<input type="date" name="date_ex" value="<?=$date_ex?>">
			<p>Аудитория</p>
			<input type="text" name="aud" value="<?=$aud?>"><br><br>
			<button type="sumbit">Редактировать</button>
		</form>
	</body>
</html>