<?php
session_start();// вся процедура работает на сессиях. Именно в ней хранятся данные пользователя, пока он находится на сайте. Очень важно запустить их в самом начале странички!!!
?>

<?php

 $link = mysql_connect('localhost', 'root', '', 'to');
if (!$link) {
 die('Ошибка соединения: ' . mysql_error());
}
	

	
mysql_select_db("to");
mysql_set_charset("utf8");




 $message_id = $_REQUEST['message_id'];

 
 
 $ispr = $_SESSION['FIO'];
 

  
// $result = mysql_query("DELETE FROM message WHERE message_id=$message_id", $link);
 
 
	$data =  date("Y-m-d");
 
             $result = mysql_query(" UPDATE message
    SET chek_message='Исправен', ispravil='$ispr', data_ispr='$data'
    WHERE message_id=$message_id", $link);
	

 
 if (!$result) {
  echo 0;
 } else {
  echo 1;
 }

 mysql_close($link);
?>
