<?php
require_once'connect.php';
$id_rasp=$_GET['id_rasp'];
mysqli_query($mysql, "DELETE FROM `rasp` WHERE `rasp`.`id_rasp`='$id_rasp'");
mysqli_query($mysql, "set @autoid :=0");
mysqli_query($mysql, " update rasp set id_rasp = @autoid := (@autoid+1)");
header('Location: tmain.php');
?>