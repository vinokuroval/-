<?php
session_start();// вся процедура работает на сессиях. Именно в ней хранятся данные пользователя, пока он находится на сайте. Очень важно запустить их в самом начале странички!!!
?>
<style>
   body {
    background-image: url(img/fon.jpg); 
	
   }
  </style>

<body>
<?php


if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} } //заносим введенный пользователем логин в переменную $login, если он пустой, то уничтожаем переменную
if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }
//заносим введенный пользователем пароль в переменную $password, если он пустой, то уничтожаем переменную

if (empty($login) or empty($password)) //если пользователь не ввел логин или пароль, то выдаем ошибку и останавливаем скрипт
{
exit ("Вы ввели не всю информацию, венитесь назад и заполните все поля! <a href='index.php'>Повторите ввод");
}
//если логин и пароль введены,то обрабатываем их, чтобы теги и скрипты не работали, мало ли что люди могут ввести
$login = stripslashes($login);
$login = htmlspecialchars($login);

$password = stripslashes($password);
$password = htmlspecialchars($password);

//удаляем лишние пробелы
$login = trim($login);
$password = trim($password);


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
		  $_SESSION['doljnost']=$myrow['doljnost']; 
		  
		   
		 }
	   
if (($_SESSION['chek_pol']==0)||($_SESSION['chek_pol']==1)||($_SESSION['chek_pol']==2)||($_SESSION['chek_pol']==3)){
	echo "Логин и пароль введены правильно, поздрваляем! <br> Все ваши действия записываются, до нажатия на кнопку 'Разрегистрация'<br><a href='chek.php'>Начать работу</a>";
	
	   }
		  
		  
		  else{
			  echo "Неправильный ввод пароля. <a href='index.php'>Повторите ввод</a>";
		  }
		
       
}


?>
</body>