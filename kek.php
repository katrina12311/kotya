<?php
$arr=array();
$p_arr=array();
$a=rand(1,6);
function Zadacha() {
    echo "В каждой строке матрицы А(n,n) найти наибольший элемент и поменять<br/>";
    echo "его местами с соответствующим диагональным элементом.<br/>";
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
$i=0;
$j=0;
	for($i = 0; $i < $a+1; $i++){
		if($i>0){
		$arr[$y][$u]=$arr[$i-1][$i-1];
		$arr[$i-1][$i-1]=$MaxEl;
		$MaxEl=0;
		}
	for($j = 0; $j < $a+1; $j++) {
		
		While($MaxEl<$arr[$i][$j]){
			$MaxEl=$arr[$i][$j];
			$y=$i;
			$u=$j;
		} 
			
		
		
	}
	}
	echo "Новая матрица:<br/>";
foreach($arr as $items) {
  foreach($items as $item) {
    echo $item.'|';
  }
  echo "<br>";
}
echo "<br>";
	}
  echo "<br>";
?>