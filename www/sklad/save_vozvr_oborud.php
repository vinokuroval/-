<?php
include('..\databaseconnect.php');
$oborud = $_POST['vozvr_oborud'];

if ($oborud){
	 
	 
if (isset($_POST['oborud'])) { $oborud = $_POST['oborud']; if ($oborud == '') { unset($oborud);} } //заносим введенный пользователем логин в переменную $login, если он пустой, то уничтожаем переменную


//если логин и пароль введены,то обрабатываем их, чтобы теги и скрипты не работали, мало ли что люди могут ввести
$oborud = stripslashes($oborud);



$oborud = htmlspecialchars($oborud);



//if (($polz != 0) && ($oborud)){

    //$link = mysqli_connect($host, $user, $password, $database) 
       // or die("Ошибка " . mysqli_error($link)); 
     
$data =  date("Y-m-d");
    
   $result1 = mysql_query ("UPDATE otvetstv
SET chek_vozvr= '0', data_vozvr = '$data'
WHERE oborud= '$oborud' AND chek_vozvr =  '1'");


  $result2 = mysql_query (" UPDATE oborudovanie
SET zanyato= '0' 
WHERE oborud_id= '$oborud' AND zanyato =  '1'"); 

  $result3 = mysql_query (" UPDATE oborudovanie
SET vydan_polz= '15' 
WHERE oborud_id= '$oborud' AND zanyato =  '0'");

  

 //$result3 = mysql_query (" UPDATE oborudovanie SET zanyato = 1 WHERE oborud_id = '$oborud'"); 


 header ('Location: ..\chek.php');  // перенаправление на нужную страницу('..\chek.php');
 
}
else{
	echo 'ОШИБКА';

}

?>