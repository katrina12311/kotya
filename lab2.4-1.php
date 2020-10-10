<p> Задача 2.4-1:
<p>
<?php
function array_fill_rand($limit, $min=false, $max=false)
{
	$limit = (int)$limit;
	$array = array();
	if ($min !== false && $max !== false)
	{
		$min = (int)$min;
		$max = (int)$max;
		for ($i=0; $i<$limit; $i++)
		{
			$array[$i] = rand($min, $max);
		}
	}
	else
	{
		for ($i=0; $i<$limit; $i++)
		{
			$array[$i] = rand();
		}
	}
	return $array;
}
$R=rand(1,10);// длина массива
$K=rand(1,10);//число К
$S=0;//счетчик
$A = array_fill_rand($R,0,10);//Массив с длиной R и числами от 0 до 10 
echo "Основной массив: ";
print_r($A);
echo "<br/>";
echo "K=".$K."<br/>";
echo "<br/>";
	for($i=0;$i<$R;$i++){ 
if ($A[$i]<$K) {
	$S=$S+1;
	$A[$i]=0;
}
}
echo "Чисел меньше K =".$S."<br/>";
print_r($A);
?>
<title><?php echo "Красько Екатерина"; ?></title>