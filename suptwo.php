<?php
	require_once'connect.php';
		$id=$_POST['id_group'];
		$name=$_POST['name_group'];
		$f=$_POST['faculty_group'];
	mysqli_query($mysql, "UPDATE `groupa` SET `name_group` = '$name', `faculty_group` = '$f' WHERE `groupa`.`id_group` = '$id'");
	
			 header('Location: smain.php');
?>