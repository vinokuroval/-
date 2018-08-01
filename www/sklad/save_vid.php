<?php
$vid_ob = $_POST['vid_ob'];
include ("..\connect_bd.php");// файл bd.php должен быть в той же папке, что и все остальные, если это не так, то просто измените путь 


if (isset($_POST['vid_ob'])) { $vid_ob = $_POST['vid_ob']; if ($vid_ob == '') { unset($vid_ob);} } //заносим введенный пользователем логин в переменную $login, если он пустой, то уничтожаем переменную



//если логин и пароль введены,то обрабатываем их, чтобы теги и скрипты не работали, мало ли что люди могут ввести
$vid_ob = stripslashes($vid_ob);


$vid_ob = htmlspecialchars($vid_ob);





// проверка на существование пользователя с таким же видом
$result = mysql_query("SELECT vid_ob FROM vid_oborud WHERE vid_ob='$vid_ob'",$connect_bd);
$myrow = mysql_fetch_array($result);
if (!empty($myrow['vid_ob'])) {
echo ("Извините, такое оборудование уже зарегистрировано. <br><a href='..\chek.php'>Введите другое оборудование.</a>");
}
else{
if ($vid_ob){
// если такого нет, то сохраняем данные
$result2 = mysql_query ("INSERT INTO vid_oborud (vid_ob) VALUES('$vid_ob')");
// Проверяем, есть ли ошибки
if ($result2=='TRUE')
{
	 header ('Location: ..\chek.php');  // перенаправление на нужную страницу('..\chek.php');
}else {
echo "Ошибка!.";
     }

}


}

?>
