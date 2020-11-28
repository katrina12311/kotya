<?php
	require_once'connect.php';

?>
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
</table>
		<h3>Добавление нового расписания</h3>
		<form action="tadd.php" method="post">
		<?php
			$result = mysqli_query($mysql, "SELECT id_group, name_group FROM groupa");
			echo "<br><br>ID группы:<br><br><select name='id_group'>";
			if ($result){
				while ($row = $result->fetch_array()){
				$id_group = $row['id_group'];
				$name_group = $row['name_group'];

				echo "<option value='$id_group'>$name_group</option>";
				}
				}
				echo "</select>";
			$result = mysqli_query($mysql, "SELECT id, name FROM object");
			echo "<br><br>ID Предмета:<br><br> <select name='id'>";
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
		<input type="date" name="date_cons">
		<p>Дата экзамена</p>
		<input type="date" name="date_ex">
		<p>Аудитория</p>
		<input type="text" name="aud">
		<br><br><button type="sumbit">Добавить новое расписание</button>
		</form>