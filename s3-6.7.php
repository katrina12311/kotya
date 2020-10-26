<HEAD> <TITLE> Красько Екатерина </TITLE> </HEAD>
<p>Задача 6 В-7:
<p>

<HTML>
    <BODY>
        <FORM action="<?php print $PHP_SELF ?>" method="post">
            <p>Предложение: <INPUT type="text" name="sentence" maxlength="40"></p>
			<p>Число букв: <INPUT type="number" name="num" maxlength="40"></p>
            <p><INPUT type="submit" name="Viv" value="Вывести"></p>
        </FORM>

        <?php
		if (isset($_POST["Viv"])){
		$str = trim($_POST["sentence"]);
		$num = trim($_POST["num"]);
			if (empty($str) || empty($num)){
                    echo "Заполните поля";
                    return;
                }
		$got=explode(' ', $str);
			for($i=0;$i<100;$i++){
			if(iconv_strlen($got[$i])==$num){
				echo $got[$i]." ";
			}
			}
		}
        ?>
    </BODY>
</HTML>