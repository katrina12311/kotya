<?php
	require_once 'connect.php';
		$id=$_POST['id'];
		$name=$_POST['name'];
		$t=$_POST['teacher'];
		$f=$_POST['faculty'];
		$l=$_POST['lecture'];
		$lr=$_POST['lr'];
		mysqli_query($mysql, "INSERT INTO `object` (`id`,`name`, `teacher`, `faculty`, `lecture`, `lr`) VALUES ('$id','$name', '$t', '$f', '$l', '$lr')");
		 mysqli_query($mysql, "set @autoid :=0");
       mysqli_query($mysql, " update object set id = @autoid := (@autoid+1)");
		 header('Location: main.php');
		?>