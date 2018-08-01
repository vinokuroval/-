<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style>
   body {
    background-image: url(\/img/fon.jpg); 	
   }
  </style>

</head>
<body>




<?php
require_once '..\connection.php'; // подключаем скрипт
mysql_query("SET NAMES 'utf8'"); 
mysql_query("SET CHARACTER SET 'utf8'");
mysql_query("SET SESSION collation_connection = 'utf8_general_ci'");
mysql_query('SET NAMES utf8 COLLATE utf8_general_ci');
 
if(isset($_POST['polz'])) {
 
    // подключаемся к серверу
    $link = mysqli_connect($host, $user, $password, $database) 
        or die("Ошибка " . mysqli_error($link)); 
     
    // экранирования символов для mysql
	 $polz = htmlentities(mysqli_real_escape_string($link, $_POST['polz']));
   
   $data_vvoda =  date("Y-m-d");
     
    // создание строки запроса
    $query ="INSERT INTO oborudovanie VALUES(NULL,'$data_vvoda','$polz','id_vid')";
     
    // выполняем запрос
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
    if($result)
    {
        echo "<span style='color:blue;'>Оборудование добавлено в базу данных<br></span>";
    }
   
	 // закрываем подключение
    mysqli_close($link);
	
	
require_once '..\connection.php'; // подключаем скрипт
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
       
            for ($j = 0 ; $j < 1 ; ++$j){ $komput=$row[$j]; echo $komput;
			echo "<span style='color:blue;'>Получен айди последнего<br></span>";
			}
		
    }
	
}
	
	 // закрываем подключение
    mysqli_close($link);
	
	
require_once '..\connection.php'; // подключаем скрипт
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
        echo "<span style='color:blue;'>Данные добавлены</span>";
    }
	
	
	
	
	 // закрываем подключение
    mysqli_close($link);
}
?>
<h2>Добавить оборудование</h2>
<form method="POST">



<p>Выбирите сотрудника:<br> 

<?php
include('../databaseconnect.php');
$result = mysql_query("SELECT id, FIO FROM users", $link);
if (!$result) {
 die('Неверный запрос: ' . mysql_error());
}
echo '
<select name="polz">
<option selected disabled hidden value=""></option>
	<optgroup label="Сотрудники ЭСА и ТМ">';
while ($row = mysql_fetch_assoc($result)) {
$polz = $row['FIO'];
$unit_id=$row['id'];

echo '<option value="'.$unit_id.'"> ' .$polz.' </option>';
}

	echo '
	</optgroup>
 </select>';
 
//<button onclick="addProduct()" style="margin-left:8px">Добавить</button><br><br>
?>


<p>Выбирите оборудование за которое будет ответственен сотрудник:<br> 

</p>

<?php
include('../databaseconnect.php');
//$result = mysql_query("SELECT id, FIO FROM sklad", $link);
if (!$result) {
 die('Неверный запрос: ' . mysql_error());
}
echo '
<select name="oborud_sklad">
<option selected disabled hidden value=""></option>
	<optgroup label="Свободное оборудование на складе">';
while ($row = mysql_fetch_assoc($result)) {
$polz = $row['FIO'];
$unit_id=$row['id'];

echo '<option value="'.$unit_id.'"> ' .$polz.' </option>';
}

	echo '
	</optgroup>
 </select>';
 
//<button onclick="addProduct()" style="margin-left:8px">Добавить</button><br><br>
?>


<br>
<br>
<input type="submit" value="Добавить">

</form>

<br><br><br><br>
<a href="/chek.php" >назад<span><br><br></a>
</body>

</html>