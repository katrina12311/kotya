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
		<h3>Добавление новой группы</h3>
		<form action="sadd.php" method="post">
		<p>Название группы</p>
		<input type="text" name="name_group">
		<p>Факультет</p>
		<input type="text" name="faculty_group">
		<br><br><button type="sumbit">Добавить новую группу</button>
		</form>