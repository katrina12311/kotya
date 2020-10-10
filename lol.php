<?php
$arr=array();
$p_arr=array();
$a=rand(1,6);
$k=rand(0,5);//константа
function Zadacha() {
    echo "Просуммировать элементы двумерного массива, <br/>";
    echo "сумма индексов которых равна заданной константе.<br/>";
    echo "<br/>";
  }
function Zapolnenie() {
global $arr;
global $p_arr;
global $a;
for($i = 0; $i < $a; $i++) {
    for($j = 0; $j < $a; $j++){
	$l=rand(1,5);
        array_push($p_arr, $i + $l);
    }
    array_push( $arr, $p_arr);
    $p_arr = [];
}
}
function Vivod(){
global $arr;
global $k;
	echo "Константа= ".$k."<br/>";
 	echo "Матрица:<br/>";
foreach($arr as $items) {
  foreach($items as $item) {
    echo $item.'|';
  }
  echo "<br>";
}
echo "<br>";
}
function Itog(){
global $arr;
global $a;
global $k;
$sum=0;
	for($i = 0; $i < $a+1; $i++){
	for($j = 0; $j < $a+1; $j++) {
		if ($i+$j==$k){
			$sum=$sum+$arr[$i][$j];
		}
	}
	}
	echo "Сумма = ".$sum.":<br/>";

	}
  echo "<br>";
?>