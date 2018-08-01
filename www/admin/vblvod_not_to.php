<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
</head>
<body>






<b>Компьютеры, не прошедшие ТО</b>
					   <table width="100%" border="1" >
					  
	
	
	
 <tr>
  <td>Инвентарный номер</td>
  <td>Местонахождение компьютера</td>
  <td>Дата предыдущего ТО или ввода в эксплуатацию</td>
    <td>Назначенная дата ТО</td>
  <td>Состояние ТО</td>

  
  
 
  
 </tr>




<?php
$link = mysql_connect('localhost', 'root', '', 'to');
if (!$link) {
 die('Ошибка соединения: ' . mysql_error());
}
mysql_select_db("to");
mysql_set_charset("utf8");





$result = mysql_query("SELECT  t1.oborud_id, t1.data_pred, t1.data_new, t1.chek
FROM oborudovanie_to t1

INNER JOIN oborudovanie t2 ON t1.oborud_id = t2.oborud_id

WHERE chek =  'не проведено'
ORDER BY  `oborud_id` ASC ", $link);

if (!$result) {
 die('Неверный запрос: ' . mysql_error());
}

while ($row = mysql_fetch_assoc($result)) {
	  echo '<tr id="row-'.$row['oborud_id'].'">';
 echo '<td>'.$row['oborud_id'].'</td>';
  echo '<td>'.$row['komnata'].'</td>';
 echo '<td>'.$row['data_pred'].'</td>';
 echo '<td>'.$row['data_new'].'</td>';
 echo '<td>'.$row['chek'].'</td>';


}

   


?>
</table>

<br><br>

<style type="text/css" media="print">
button {display: none; }
</style>

<a href="\chek.php"><button>Назад</button></a>






<button onclick="window.print();">Печать</button>



</body>

</html>