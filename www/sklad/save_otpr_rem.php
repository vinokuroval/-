<?php
include('..\databaseconnect.php');
$oborud = $_POST['v_rem'];

if ($oborud){
	 
	 
if (isset($_POST['oborud'])) { $oborud = $_POST['oborud']; if ($oborud == '') { unset($oborud);} } //заносим введенный пользователем логин в переменную $login, если он пустой, то уничтожаем переменную


//если логин и пароль введены,то обрабатываем их, чтобы теги и скрипты не работали, мало ли что люди могут ввести
$oborud = stripslashes($oborud);



$oborud = htmlspecialchars($oborud);



//if (($polz != 0) && ($oborud)){

    //$link = mysqli_connect($host, $user, $password, $database) 
       // or die("Ошибка " . mysqli_error($link)); 
     

    
   $result1 = mysql_query ("UPDATE oborudovanie SET zanyato= '2'  WHERE oborud_id= '$oborud'");
   
   
    $data_otpr=date('Y.m.d');  
	
   $result2 = mysql_query ("INSERT INTO remont VALUES(NULL,'$data_otpr','0000-00-00','0','$oborud')");





 //$result3 = mysql_query (" UPDATE oborudovanie SET zanyato = 1 WHERE oborud_id = '$oborud'"); 


 header ('Location: ..\chek.php');  // перенаправление на нужную страницу('..\chek.php');
 
}
else{
	echo 'ОШИБКА';

}

?>












