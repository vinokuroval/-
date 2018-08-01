<?php

include('..\databaseconnect.php');
if (!$link) {
 die('Ошибка соединения: ' . mysql_error());
}
	

	
mysql_select_db("to");
mysql_set_charset("utf8");

 $message_id = $_REQUEST['message_id'];

 
 

 

  
// $result = mysql_query("DELETE FROM message WHERE message_id=$message_id", $link);
 
 

 
             $result = mysql_query(" UPDATE message
    SET podtverjd_pol='Ремонт не подтверждён', data_ispr='0000-00-00', ispravil='', chek_message='Повторная поломка'
    WHERE message_id=$message_id", $link);
	

 
 if (!$result) {
  echo 0;
 } else {
  echo 1;
 }

 mysql_close($link);
?>
