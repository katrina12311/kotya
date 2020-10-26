<HEAD> <TITLE> Красько Екатерина </TITLE> </HEAD>

<p>Задача 6 В-5:
<p>

<HTML>
    <BODY>
        <FORM action="<?php print $PHP_SELF ?>" method="post">
            <p>Предложение: <INPUT type="text" name="sentence" maxlength="40"></p>
            <p><INPUT type="submit" name="Viv" value="Вывести"></p>
        </FORM>

        <?php
		$str = trim($_POST["sentence"]);
		$data = explode(" ", $str);
		for ($i=0;$i<100;$i++){
		echo $data[$i]."</br>";
		}
        ?>
    </BODY>
</HTML>