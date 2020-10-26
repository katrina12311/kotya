<HTML>
<HEAD> <TITLE> Красько Екатерина </TITLE> </HEAD>
<BODY>
<FORM method="post" action="<?php print $PHP_SELF ?>">
Введите логин:
<INPUT type="text" name="userName" maxlength="20">
<P> <INPUT type="submit" name="obr" value="Проверить">
</FORM>
<?php
			$a = array("Красько", "Петров", "Иванов", "Васнецова");
			$b = array("Екатерина Евгеньевна", "Петр Петрович", "Иван Иванович", "Галина Сергеевна");
		    $c=count($a)-1;
			if (isset($_POST["obr"])){

				$pr=false;
                $user_name = trim($_POST["userName"]);
				for ($i=0;$i<count($a);$i++){
				if ($user_name == $a[$i]){
                    echo "Здравствуйте, ". $a[$i]." ".$b[$i];
					$pr=true;
					
			}	
			}
			if ($pr == false){
				echo "Вы не зарегистрированный пользователь!";
			}
			} 
        ?>
    </BODY>

</HTML>