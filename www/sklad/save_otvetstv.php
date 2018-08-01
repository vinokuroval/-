<?php
include('..\databaseconnect.php');
$oborud = $_POST['oborud'];
$polz = $_POST['polz'];
if (($oborud)&&($polz)){
	 
	 
if (isset($_POST['oborud'])) { $oborud = $_POST['oborud']; if ($oborud == '') { unset($oborud);} } //заносим введенный пользователем логин в переменную $login, если он пустой, то уничтожаем переменную
if (isset($_POST['polz'])) { $polz = $_POST['polz']; if ($polz == '') { unset($polz);} } //заносим введенный пользователем логин в переменную $login, если он пустой, то уничтожаем переменную



//если логин и пароль введены,то обрабатываем их, чтобы теги и скрипты не работали, мало ли что люди могут ввести
$oborud = stripslashes($oborud);
$polz = stripslashes($polz);


$oborud = htmlspecialchars($oborud);
$polz = htmlspecialchars($polz);


//if (($polz != 0) && ($oborud)){

    //$link = mysqli_connect($host, $user, $password, $database) 
       // or die("Ошибка " . mysqli_error($link)); 
     
$data =  date("Y-m-d");
    
   $result1 = mysql_query ("INSERT INTO otvetstv VALUES('$polz','$oborud','$data','0000-00-00','1')");


  $result2 = mysql_query (" UPDATE oborudovanie SET vydan_polz = '$polz' WHERE oborud_id = '$oborud'"); 

 $result3 = mysql_query (" UPDATE oborudovanie SET zanyato = 1 WHERE oborud_id = '$oborud'"); 


 header ('Location: ..\chek.php');  // перенаправление на нужную страницу('..\chek.php');
 
}
else{
	echo 'ОШИБКА';

}

?>