<?php
require_once'connect.php';
$id=$_GET['id'];
mysqli_query($mysql, "DELETE FROM `object` WHERE `object`.`id`='$id'");
mysqli_query($mysql, "set @autoid :=0");
mysqli_query($mysql, " update object set id = @autoid := (@autoid+1)");
header('Location: main.php');


?>