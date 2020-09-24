<TITLE> Krasko Ekaterina </TITLE>
<p>
<?php
$N=rand();
$M=rand();
$b=0;
$c=0;
echo "N= ",$N,"<br />";
for ($i = 1; $i <= sqrt($N); $i++)
{
if ($N%$i == 0)
{
if ($N / $i == $i){
echo $i," ";
$b=$i+$b;
}else{
echo $i," ", $N/$i," ";
$b=$i+$b+$N/$i;
}
}
}

echo " <-Делители N <br />";
echo $b . " <-Сумма N <br />";
echo "M= ",$M,"<br />";
for ($j = 1; $j <= sqrt($M); $j++)
{
if ($M%$j == 0)
{
if ($M / $j == $j){
echo $j," ";
$c=$j+$c;
}else{
echo $j," ", $M/$j," ";
$c=$j+$c+$M/$j;
}
}
}

echo " <-Делители M <br />";
echo $c . " <-Сумма M <br />";
if ($c==$b){
echo $N , " и ",$M, " - дружественные"; }
else{
echo $N , " и ",$M, " - не дружественные";
}
?>