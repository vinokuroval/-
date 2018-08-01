<?php

if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} } //заносим введенный пользователем логин в переменную $login, если он пустой, то уничтожаем переменную
if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }
if (isset($_POST['FIO'])) { $FIO=$_POST['FIO']; if ($FIO =='') { unset($FIO);} } 
if (isset($_POST['komnata'])) { $komnata=$_POST['komnata']; if ($komnata =='') { unset($komnata);} }
if (isset($_POST['doljnost'])) { $doljnost=$_POST['doljnost']; if ($doljnost =='') { unset($doljnost);} }
if (isset($_POST['dolzn'])) { $dolzn=$_POST['dolzn']; if ($dolzn =='') { unset($dolzn);} }


if (empty($login) or empty($password)) //если пользователь не ввел логин или пароль, то выдаем ошибку и останавливаем скрипт
{
exit ("Вы ввели не всю информацию, 
<a href='reg.php'>вернитесь назад и заполните все поля</a>!");
}
//если логин и пароль введены,то обрабатываем их, чтобы теги и скрипты не работали, мало ли что люди могут ввести
$login = stripslashes($login);
$login = htmlspecialchars($login);
$doljnost = htmlspecialchars($doljnost);

$password = stripslashes($password);
$password = htmlspecialchars($password);
$doljnost = htmlspecialchars($doljnost);

$FIO = stripslashes($FIO);
$FIO = htmlspecialchars($FIO);
$doljnost = htmlspecialchars($doljnost);

//удаляем лишние пробелы
$login = trim($login);
$password = trim($password);
$FIO = trim($FIO);
$doljnost= trim($doljnost);


// подключаемся к базе
include ("..\connect_bd.php");// файл bd.php должен быть в той же папке, что и все остальные, если это не так, то просто измените путь 

// проверка на существование пользователя с таким же логином
$result = mysql_query("SELECT id FROM users WHERE login='$login'",$connect_bd);
$myrow = mysql_fetch_array($result);
if (!empty($myrow['id'])) {
exit ("Извините, введённый вами логин уже зарегистрирован. <a href='..\chek.php'>Введите другой логин.</a>");
}

// если такого нет, то сохраняем данные
$result2 = mysql_query ("INSERT INTO users (login,password,komnata,FIO,doljn,chek_pol) VALUES('$login','$password','$komnata','$FIO','$doljnost','$dolzn')");
// Проверяем, есть ли ошибки
if ($result2=='TRUE')
{
//echo "Сотрудник зарегестрирован. <a href='reg.php'>Продлжить реоистрацию сотрудников</a> или <a href=\chek.php>вернуться назад.</a>";
 header ('Location: ..\chek.php');  // перенаправление на нужную страницу('..\chek.php');
}

else {
echo "Ошибка! Вы не зарегистрированы.";
     }
?>