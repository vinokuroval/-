<?php
session_start();// вся процедура работает на сессиях. Именно в ней хранятся данные пользователя, пока он находится на сайте. Очень важно запустить их в самом начале странички!!!
?>

<?php

include('..\databaseconnect.php');
if (!$link) {
 die('Ошибка соединения: ' . mysql_error());
}
	

	
mysql_select_db("to");
mysql_set_charset("utf8");


 $oborud_id = $_REQUEST['oborud_id'];

 
 
 $provel = $_SESSION['FIO'];
 

  
// $result = mysql_query("DELETE FROM message WHERE message_id=$message_id", $link);
 
 
	$data =  date("Y-m-d");
 
             $result = mysql_query(" UPDATE oborudovanie_to
    SET chek='проведено', sotr='$provel', data_prov='$data'
    WHERE oborud_id=$oborud_id", $link);
	

 
 if (!$result) {
  echo 0;
 } else {
  echo 1;
 }
 
 

  $data_next_to=date('Y.m.d', strtotime("+365 days"));
 
   $result = mysql_query("INSERT INTO oborudovanie_to VALUES('$oborud_id', '$data','не проведено','$data_next_to','','')", $link);
 
  if (!$result) {
  echo 0;
 } else {
  echo 1;
 }
 
 mysql_close($link);
?>
