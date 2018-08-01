<?php
session_start();// вся процедура работает на сессиях. Именно в ней хранятся данные пользователя, пока он находится на сайте. Очень важно запустить их в самом начале странички!!!


$login = $_SESSION['login']; 
$password = $_SESSION['password']; 

?>
<style>
   body {
    background-image: url(img/fon.jpg); 
	
   }
  </style>
  
  

<body>
<?php


// подключаемся к базе
include ("connect_bd.php");// файл bd.php должен быть в той же папке, что и все остальные, если это не так, то просто измените путь 


$result = mysql_query("SELECT * FROM users t1 INNER JOIN spisok_doljnostei t2 ON t1.doljn = t2.id_doljn WHERE login='$login' and password='$password'",$connect_bd); //извлекаем из базы все данные о пользователе с введенным логином
$myrow = mysql_fetch_array($result);
if (empty($myrow['login']))
{
//если пользователя с введенным логином не существует
echo "Неправильный ввод логина или пароля. <a href='index.php'>Повторите ввод</a>";
}
else {
//если существует, то сверяем пароли
          if ($myrow['password']==$password) {
			  
          //если пароли совпадают, то запускаем пользователю сессию! Можете его поздравить, он вошел!
          $_SESSION['login']=$myrow['login']; 
		  $_SESSION['password']=$myrow['password']; 
          $_SESSION['id']=$myrow['id'];//эти данные очень часто используются, вот их и будет "носить с собой" вошедший 
		  $_SESSION['chek_pol']=$myrow['chek_pol'];
		  $_SESSION['komnata']=$myrow['komnata'];
		  $_SESSION['FIO']=$myrow['FIO'];
		  $_SESSION['doljn']=$myrow['doljn'];
		  
		   if ($_SESSION['chek_pol'] == "1"){
   // Если не пусты, то мы выводим ссылку
	 require('admin/admin.php');
	 }
	   if ($_SESSION['chek_pol'] == "0"){
   // Если не пусты, то мы выводим ссылку
	 require('polz/polz.php');
	 }
	 if ($_SESSION['chek_pol'] == "2"){
   // Если не пусты, то мы выводим ссылку
	 require('sklad/sklad.php');
	 }
	  if ($_SESSION['chek_pol'] == "3"){
   // Если не пусты, то мы выводим ссылку
	 require('texnik/texnik.php');
	 }
		  
		  }
		  else{
			  echo "Неправильный ввод логина или пароля. <a href='index.php'>Повторите ввод</a>";
		  }
		
       
}


?>


</body>