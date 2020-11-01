<p> Задача 6 В-10:
<p>
<HTML>
    <BODY>
        <FORM action="<?php print $PHP_SELF ?>" method="post">
            <p>Предложение(лат.): <INPUT type="text" name="sentence" maxlength="40"></p>
			<p><INPUT type="submit" name="delete" value="Изменить"></p>
        </FORM>
<?php
function my_strtoupper ($string){
$str=strtolower($string);
if (strtolower ('ц')!='Ц') $string = strtr(
$string,
'абвгдеёжзийклмнорпстуфхцчшщъьыэюя',
'АБВГДЕЁЖЗИЙКЛМНОРПСТУФХЦЧШЩЪЬЫЭЮЯ');
return $string;
};
$str = trim($_POST["sentence"]);
echo "Изначальное предложение: ".$str."</br>"; 
$str=my_strtoupper($str);
echo "Изменённое: ".$str; 
?>
 </BODY>
</HTML>