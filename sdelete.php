<?php
require_once'connect.php';
$id_group=$_GET['id_group'];
mysqli_query($mysql, "DELETE FROM `rasp` WHERE `rasp`.`id_group`='$id_group'");
mysqli_query($mysql, "DELETE FROM `groupa` WHERE `groupa`.`id_group`='$id_group'");
mysqli_query($mysql, "set @autoid :=0");
mysqli_query($mysql, " update groupa set id_group = @autoid := (@autoid+1)");
header('Location: smain.php');


?>