<?php
	require_once'connect.php';
		$id_rasp=$_POST['id_rasp'];
		$id_group=$_POST['id_group'];
		$id=$_POST['id'];
		$date_cons=$_POST['date_cons'];
		$date_ex=$_POST['date_ex'];
		$aud=$_POST['aud'];
		
	mysqli_query($mysql, "UPDATE `rasp` SET `id_group` = '$id_group', `id` = '$id', `date_cons` = '$date_cons', `date_ex` = '$date_ex', `aud` = '$aud' WHERE `rasp`.`id_rasp` = '$id_rasp'");
	
			 header('Location: tmain.php');
?>