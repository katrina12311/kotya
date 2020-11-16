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
		<h3>Добавление нового предмета</h3>
		<form action="add.php" method="post">
		<p>Наименование</p>
		<input type="text" name="name">
		<p>Преподаватель</p>
		<input type="text" name="teacher">
		<p>Факультет</p>
		<input type="text" name="faculty">
		<p>Кол-во лекций</p>
		<input type="number" name="lecture">
		<p>Кол-во ЛР</p>
		<input type="number" name="lr"><br><br>
		<button type="sumbit">Добавление нового предмета</button>
		</form>