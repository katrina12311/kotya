<?php
	require_once 'connect.php';
		$id_rasp=$_POST['id_rasp'];
		$id_group=$_POST['id_group'];
		$id=$_POST['id'];
		$date_cons=$_POST['date_cons'];
		$date_ex=$_POST['date_ex'];
		$aud=$_POST['aud'];
		$date_cons = date('Y.m.d', strtotime($date_cons));
		$date_ex = date('Y.m.d', strtotime($date_ex));
		if ($date_cons>$date_ex){
			echo "Ошибка:Консультация не может быть позже экзамена.";
			exit;
		}
		mysqli_query($mysql, "INSERT INTO `rasp` (`id_group`,`id`,`date_cons`,`date_ex`,`aud`) VALUES ('$id_group','$id','$date_cons','$date_ex','$aud')");
		 mysqli_query($mysql, "set @autoid :=0");
       mysqli_query($mysql, " update rasp set id_rasp = @autoid := (@autoid+1)");
		 header('Location: tmain.php');
		?>
		