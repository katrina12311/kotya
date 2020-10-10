<title><?php echo "Красько Екатерина"; ?></title>
<p> Задача 2.5-2:
<p>
<?php
$a=rand(-5,5);
$b=rand(-5,5);
function f($u, $t) {
    if ( pow($u,2) > abs(4*$u*$t) ){
        return log(abs($u+$t));
    }elseif ( pow($u,2) < abs(4*$u*$t)){
        return tan(1/($u*$t));
    }elseif ($u>=0 && $t<0){
        return exp($u*$u+sqrt(sin($u)));
  }
}
$Z=pow(sin(f($a,$b)+f(log(abs($a-$b)),$b)),2);
echo "a=".$a." b=".$b."<br/>";
echo "Z=".$Z;
?>
