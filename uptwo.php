<?php
	require_once'connect.php';
		$id=$_POST['id'];
		$name=$_POST['name'];
		$t=$_POST['teacher'];
		$f=$_POST['faculty'];
		$l=$_POST['lecture'];
		$lr=$_POST['lr'];
	mysqli_query($mysql, "UPDATE `object` SET `name` = '$name', `teacher` = '$t', `faculty` = '$f', `lecture` = '$l', `lr` = '$lr' WHERE `object`.`id` = '$id'");
	
			 header('Location: main.php');
?>