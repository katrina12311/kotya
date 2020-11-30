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
		<?php
		$result = mysqli_query($mysql, "SELECT id_group, name_group FROM groupa");
		echo '<p style="color: #50c878">'."<br>Группа<br><br> <select name='id_group'>";
		if ($result){
			
                    // Для каждой строки из запроса
                    while ($row = $result->fetch_array()){
						 
                        $id_group = $row['id_group'];
                        $name_group = $row['name_group'];
						
                        echo "<option value='$id_group'>$name_group</option>";
                    }
                }
		       echo "<option selected value='$id_group'>$name_group</option>";
                echo "</select>";
		$result = mysqli_query($mysql, "SELECT id, name FROM object");
		echo '<p style="color: #50c878">'."Предмет<br><br> <select name='id'>";
        
		if ($result){
                    // Для каждой строки из запроса
                    while ($row = $result->fetch_array()){
						
                        $id = $row['id'];
                        $name = $row['name'];
			
                        echo "<option value='$id'>$name</option>";
                    }
                }
		echo "<option selected value='$id'>$name</option>";
                echo "</select>";
		?>
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
