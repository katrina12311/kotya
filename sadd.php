<?php
	require_once 'connect.php';
		$id=$_POST['id_group'];
		$name=$_POST['name_group'];
		$f=$_POST['faculty_group'];
		mysqli_query($mysql, "INSERT INTO `groupa` (`name_group`,`faculty_group`) VALUES ('$name','$f')");
		 mysqli_query($mysql, "set @autoid :=0");
       mysqli_query($mysql, " update groupa set id_group = @autoid := (@autoid+1)");
		 header('Location: smain.php');
		?>