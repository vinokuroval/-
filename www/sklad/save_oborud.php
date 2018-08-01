<?php
session_start();// вся процедура работает на сессиях. Именно в ней хранятся данные пользователя, пока он находится на сайте. Очень важно запустить их в самом начале странички!!!


	 $FIO = $_SESSION['FIO'];  
	 $id = $_SESSION['id'];  


$polz = $_POST['polz'];
	mysql_select_db("to");
					mysql_set_charset("utf8");
	include ("..\connect_bd.php");// файл bd.php должен быть в той же папке, что и все остальные, если это не так, то просто измените путь 

	 require_once '..\connection.php'; // подключаем скрипт
    // подключаемся к серверу
	
	
	if (isset($_POST['name_ob'])) { $name_ob = $_POST['name_ob']; if ($name_ob == '') { unset($name_ob);} } //заносим введенный пользователем логин в переменную $login, если он пустой, то уничтожаем переменную
 

//если логин и пароль введены,то обрабатываем их, чтобы теги и скрипты не работали, мало ли что люди могут ввести
$name_ob = stripslashes($name_ob);



$name_ob = htmlspecialchars($name_ob);



$name_ob = trim($name_ob);


if (($polz != 0) && ($name_ob)){

    $link = mysqli_connect($host, $user, $password, $database) 
        or die("Ошибка " . mysqli_error($link)); 
     
    // экранирования символов для mysql
	
   
   $data_vvoda =  date("Y-m-d");
     $zanyato = '0';
	
   
   
 
$result2 = mysql_query ("INSERT INTO oborudovanie VALUES('$name_ob',NULL,'$data_vvoda','$id','$polz','$zanyato','$id')");
// Проверяем, есть ли ошибки
if ($result2=='TRUE')
{

}
else{echo 'ошибка';}
   
   
   
   
   
	 // закрываем подключение
    mysqli_close($link);
	
	

	$link = mysqli_connect($host, $user, $password, $database) 
    or die("Ошибка " . mysqli_error($link)); 
     
$query ="SELECT MAX(oborud_id) FROM oborudovanie";
 
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
if($result)
{
    $rows = mysqli_num_rows($result); // количество полученных строк
     
   
    for ($i = 0 ; $i < $rows ; ++$i)
    {
        $row = mysqli_fetch_row($result);
       
            for ($j = 0 ; $j < 1 ; ++$j){ $komput=$row[$j]; 
			//echo $komput;
		//	echo "<span style='color:blue;'>Получен айди последнего<br></span>";
			}
		
    }
	
}

	
	
	

	 $link = mysqli_connect($host, $user, $password, $database) 
        or die("Ошибка " . mysqli_error($link)); 
     
  

 $data_pred=date('Y.m.d');  
 $data_new=date('Y.m.d', strtotime("+365 days"));
  
  
     
    // создание строки запроса
    $query ="INSERT INTO oborudovanie_to VALUES('$komput', '$data_pred','не проведено','$data_new','')";
     
    // выполняем запрос
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
    if($result)
    {
       // echo "<span style='color:blue;'>Данные добавлены</span>";
    }
	

	
	 
 
 mysqli_close($link);
  header ('Location: ..\chek.php');  // перенаправление на нужную страницу('..\chek.php');
}
else{
	echo'<br>Ошибка, заполните все поля';
}	

?>
