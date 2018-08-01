<?php
session_start();// вся процедура работает на сессиях. Именно в ней хранятся данные пользователя, пока он находится на сайте. Очень важно запустить их в самом начале странички!!!   
?>
<?php
if (isset($_POST['dop_inf'])) { $dop_inf = $_POST['dop_inf']; if ($dop_inf == '') { unset($dop_inf);} } //заносим введенный пользователем логин в переменную $login, если он пустой, то уничтожаем переменную


if (empty($dop_inf) or empty($dop_inf)) //если пользователь не ввел логин или пароль, то выдаем ошибку и останавливаем скрипт
{
exit ("Вы ввели не всю информацию, 
<a href='\chek.php'>вернитесь назад и заполните все поля</a>!");
}
//если логин и пароль введены,то обрабатываем их, чтобы теги и скрипты не работали, мало ли что люди могут ввести
$dop_inf = stripslashes($dop_inf);
$dop_inf = htmlspecialchars($dop_inf);

//удаляем лишние пробелы
$dop_inf = trim($dop_inf);

//забираем у сессии информацию
$id=$_SESSION['id'];
$oborud_id=$_SESSION['oborud_id'];



// подключаемся к базе
include ("..\connect_bd.php");// файл bd.php должен быть в той же папке, что и все остальные, если это не так, то просто измените путь 

require_once '..\connection.php'; // подключаем скрипт
 
$link = mysqli_connect($host, $user, $password, $database) 
    or die("Ошибка " . mysqli_error($link)); 

$query ="SELECT * FROM users";

 
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
if($result)
{
    $rows = mysqli_num_rows($result); // количество полученных строк
     
  
    for ($i = 0 ; $i < $rows ; ++$i)
    {
        $row = mysqli_fetch_row($result);
        echo "<tr>";
            for ($j = 0 ; $j < 5 ; ++$j){
			if ($row[0]==$_SESSION['id']){
				$komnata=$row[3];
			}
			}
			
			
        echo "</tr>";
    }
    echo "</table>";
     
    // очищаем результат
    mysqli_free_result($result);
}
 
 
 
$data =  date("Y-m-d");
   
// если такого нет, то сохраняем данные
$result2 = mysql_query ("INSERT INTO message (id,chek_message,dop_inf,data_sozd,podtverjd_pol) VALUES('$id','Поломка','$dop_inf','$data','Ремонт не подтверждён')");
// Проверяем, есть ли ошибки
if ($result2=='TRUE')
{
echo "Сообщение успешно отправлено технику <br><a href='\chek.php'><button>Назад</button></a><br>";

}

else {
echo "Ошибка! Вы не зарегистрированы.";
     }
	 
	 mysqli_close($link);
?>