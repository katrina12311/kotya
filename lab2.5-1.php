<title><?php echo "Красько Екатерина"; ?></title>
<p> Задача 2.5-1:
<p>
<?php
$a=rand(-5,5);
$b=rand(-5,5);
function f($u, $t) {
    if ( $u >= 0 && $t >= 0 ){
        return $u-2*$t;
    }elseif ( $u <= 0 && $t >= 0 ){
        return $u+$t;
    }elseif ($u>=0 && $t<0){
        return $u*$u-2*$t;
    }elseif ($u<0 && $t<0){
	return $t+3*$u;
}
}
$Z=f($a,$b*$b+$a)+f($a,$b);
echo "a=".$a." b=".$b."<br/>";
echo "Z=".$Z;
?>
