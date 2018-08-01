	   
					   
					   
					<table  width="100%" border="" >
                    <big><b><p align="left">Внеплановые неисправности:</p></b></big>
					<center>

					
					 <tr>
					  <td class="colzag">Статус</td>
					  <td class="colzag">Описание неисправности</td>
					  <td class="colzag">Рабочее место</td>
					  <td class="colzag">Сотрудник</td>
					  <td class="colzag">Дата обнаружения неисправности</td>
					  
					 </tr>

					<?php

					include('..\databaseconnect.php');
					
					if (!$link) {
					 die('Ошибка соединения: ' . mysql_error());
					}
					mysql_select_db("to");
					mysql_set_charset("utf8");
 
					$result = mysql_query('SELECT  t1.message_id, t1.chek_message, t1.dop_inf, t2.komnata, t2.FIO, t1.data_sozd
					FROM message t1
					INNER JOIN users t2 ON t1.id = t2.id
					WHERE chek_message !=  "Исправен"', $link);
					if (!$result) {
					 die('Неверный запрос: ' . mysql_error());
					}

					while ($row = mysql_fetch_assoc($result)) {
					  echo '<tr id="row-'.$row['message_id'].'">';
					 echo '<td class="colpolomk">'.$row['chek_message'].'</td>';
					 echo '<td class="colpolomk">'.$row['dop_inf'].'</td>';
					 echo '<td class="colpolomk">'.$row['komnata'].'</td>';
					 echo '<td class="colpolomk">'.$row['FIO'].'</td>';
					 echo '<td class="colpolomk">'.$row['data_sozd'].'</td>';
					 ////<button     onclick="remont('.$row['message_id'].')">Оборудование исправно</button></td></tr>';
					// echo '<td><button onclick="remont('.$row['message_id'].')">Оборудование исправно</button></td></tr>';
					}


					mysql_close($link);

					?>
					
					
					
					
					

					   </table>
					   </div>
					   <table width="100%" border="1" >
					<big>   <b><p align="left">Техническое обслуживание:</p></b></big>
	
	
	
 <tr>
  <td class="colzag">Инвентарный номер</td>
  <td class="colzag">Наименование оборудования</td>
  <td class="colzag">Вид оборудования</td>
  <td class="colzag">Местонахождение оборудования</td>
  <td class="colzag">Дата предыдущего ТО</td>
    <td class="colzag">Назначенная дата ТО</td>
  <td class="colzag">Состояние ТО</td>
  
  
 
  
 </tr>


 
<?php

include('..\databaseconnect.php');
if (!$link) {
 die('Ошибка соединения: ' . mysql_error());
}
mysql_select_db("to");
mysql_set_charset("utf8");


 $data_new7=date('Y-m-d', strtotime("+7 days"));
 
$data =  date("Y-m-d");
//$time=strtotime(date($data_new7)) - strtotime(date($data ));
 //echo $time;

 
 
 
 
$result = mysql_query("SELECT t1.oborud_id, t2.name_ob, t1.data_pred, t1.data_new, t1.chek, t3.komnata, t4.vid_ob
FROM oborudovanie_to t1
INNER JOIN oborudovanie t2 ON t1.oborud_id = t2.oborud_id
INNER JOIN users t3 ON t2.vydan_polz = t3.id
INNER JOIN vid_oborud t4 ON t2.id_vid = t4.id_vid
WHERE chek =  'не проведено'
ORDER BY  `data_new` ASC ", $link);
if (!$result) {
 die('Неверный запрос: ' . mysql_error());
}



 echo '<tr><td class="col1">'."<b>Просрочено:</b>".'</td></tr>';
while ($row = mysql_fetch_assoc($result)) {
	$dat=$row['data_new'];
	$time=strtotime(date($dat)) - strtotime(date($data ));

	if ($time<=-86400){
	
	
	
  echo '<tr  id="row-'.$row['oborud_id'].'">';
 echo '<td class="col1">'.$row['oborud_id'].'</td>';
   echo '<td class="col1">'.$row['name_ob'].'</td>';
   echo '<td class="col1">'.$row['vid_ob'].'</td>';
  echo '<td class="col1">'.$row['komnata'].'</td>';
 echo '<td class="col1">'.$row['data_pred'].'</td>';
 echo '<td class="col1">'.$row['data_new'].'</td>';
 echo '<td class="col1">'.$row['chek'].'</td>';
echo '<td><button class="style" onclick="to_ob('.$row['oborud_id'].')">ТО проведено успешно</button></td></tr>';
   
}


}
 
 


$result = mysql_query("SELECT t1.oborud_id, t2.name_ob, t1.data_pred, t1.data_new, t1.chek, t3.komnata, t4.vid_ob
FROM oborudovanie_to t1
INNER JOIN oborudovanie t2 ON t1.oborud_id = t2.oborud_id
INNER JOIN users t3 ON t2.vydan_polz = t3.id
INNER JOIN vid_oborud t4 ON t2.id_vid = t4.id_vid
WHERE chek =  'не проведено'
ORDER BY  `data_new` ASC  ", $link);
if (!$result) {
 die('Неверный запрос: ' . mysql_error());
}



 echo '<tr><td class="col2">'."<b>Меньше 7 дней:</b>".'</td></tr>';
while ($row = mysql_fetch_assoc($result)) {
	$dat=$row['data_new'];
	$time=strtotime(date($dat)) - strtotime(date($data ));
	$d=604800; //дни в секундах 7
	if ($time<=$d && $time>-86400){
	
	
	
  	
	echo '<tr  id="row-'.$row['oborud_id'].'">';
	echo '<td class="col2">'.$row['oborud_id'].'</td>';
	echo '<td class="col2">'.$row['name_ob'].'</td>';
	 echo '<td class="col2">'.$row['vid_ob'].'</td>';
	echo '<td class="col2">'.$row['komnata'].'</td>';
	echo '<td class="col2">'.$row['data_pred'].'</td>';
	echo '<td class="col2">'.$row['data_new'].'</td>';
	echo '<td class="col2">'.$row['chek'].'</td>';
	echo '<td><button class="style" onclick="to_ob('.$row['oborud_id'].')">ТО проведено успешно</button></td></tr>';
}


}












$result = mysql_query("SELECT t1.oborud_id, t2.name_ob, t1.data_pred, t1.data_new, t1.chek, t3.komnata, t4.vid_ob
FROM oborudovanie_to t1
INNER JOIN oborudovanie t2 ON t1.oborud_id = t2.oborud_id
INNER JOIN users t3 ON t2.vydan_polz = t3.id
INNER JOIN vid_oborud t4 ON t2.id_vid = t4.id_vid
WHERE chek =  'не проведено'
ORDER BY  `data_new` ASC ", $link);
if (!$result) {
 die('Неверный запрос: ' . mysql_error());
}



 echo '<tr><td class="col3">'."<b>Меньше 15 дней:</b>".'</td></tr>';
while ($row = mysql_fetch_assoc($result)) {
	$dat=$row['data_new'];
	$time=strtotime(date($dat)) - strtotime(date($data ));
	$d1=604800/7*15; //дни в секундах 15
	if ($time<=$d1 && $time>$d){
	
	
	
  echo '<tr  id="row-'.$row['oborud_id'].'">';
	echo '<td class="col3">'.$row['oborud_id'].'</td>';
	echo '<td class="col3">'.$row['name_ob'].'</td>';
	 echo '<td class="col3">'.$row['vid_ob'].'</td>';
	echo '<td class="col3">'.$row['komnata'].'</td>';
	echo '<td class="col3">'.$row['data_pred'].'</td>';
	echo '<td class="col3">'.$row['data_new'].'</td>';
	echo '<td class="col3">'.$row['chek'].'</td>';
	echo '<td><button class="style"  onclick="to_ob('.$row['oborud_id'].')">ТО проведено успешно</button></td></tr>';
}


}











$result = mysql_query("SELECT t1.oborud_id, t2.name_ob, t1.data_pred, t1.data_new, t1.chek, t3.komnata, t4.vid_ob
FROM oborudovanie_to t1
INNER JOIN oborudovanie t2 ON t1.oborud_id = t2.oborud_id
INNER JOIN users t3 ON t2.vydan_polz = t3.id
INNER JOIN vid_oborud t4 ON t2.id_vid = t4.id_vid
WHERE chek =  'не проведено'
ORDER BY  `data_new` ASC ", $link);
if (!$result) {
 die('Неверный запрос: ' . mysql_error());
}
	 echo '<tr><td class="col4">'."<b>Меньше 30 дней:</b>".'</td></tr>';
while ($row = mysql_fetch_assoc($result)) {
	$dat=$row['data_new'];
	$time=strtotime(date($dat)) - strtotime(date($data ));

	$d2=1296000*2; //дни в секундах 30
	

if ($time<=$d2 && $time>$d1 && $time>$d){
	
	

  echo '<tr  id="row-'.$row['oborud_id'].'">';
	echo '<td class="col4">'.$row['oborud_id'].'</td>';
	echo '<td class="col4">'.$row['name_ob'].'</td>';
	 echo '<td class="col4">'.$row['vid_ob'].'</td>';
	echo '<td class="col4">'.$row['komnata'].'</td>';
	echo '<td class="col4">'.$row['data_pred'].'</td>';
	echo '<td class="col4">'.$row['data_new'].'</td>';
	echo '<td class="col4">'.$row['chek'].'</td>';
	echo '<td><button  class="style" onclick="to_ob('.$row['oborud_id'].')">ТО проведено успешно</button></td></tr>';
}
}
































mysql_close($link);

?>




			   
					    <table  width="100%" border="1" >
					<big>   <b><p align="left">Список оборудования:</p></b></big>
	
	
	
 <tr >
   <td class="colzag">Наименование оборудования</td>
   <td class="colzag">Класс</td>
  <td class="colzag">Индивидуальный номер</td>
  <td class="colzag">Дата выдачи</td>
  <td class="colzag">Кому выдано</td>
 </tr>		   			   
<?php
include('..\databaseconnect.php');
if (!$link) {
 die('Ошибка соединения: ' . mysql_error());
}
mysql_select_db("to");
mysql_set_charset("utf8");
$result = mysql_query("SELECT * 
FROM otvetstv t1
INNER JOIN oborudovanie t2 ON t1.oborud = t2.oborud_id
INNER JOIN users t3 ON t1.polz = t3.id
INNER JOIN vid_oborud t4 ON t2.id_vid = t4.id_vid
WHERE chek_vozvr =  '1' and  t2.id_vid !='6'", $link);
if (!$result) {
 die('Неверный запрос: ' . mysql_error());
}
 echo '<tr><td class="col3">'."<b>Используется:</b>".'</td></tr>';
while ($row = mysql_fetch_assoc($result)) {
  echo '<tr  id="row-'.$row['name_ob'].'">';
 echo '<td class="col3">'.$row['name_ob'].'</td>';
  echo '<td class="col3">'.$row['vid_ob'].'</td>';
  echo '<td class="col3">'.$row['oborud_id'].'</td>';
 echo '<td class="col3">'.$row['data_vydachi'].'</td>';
 echo '<td class="col3">'.$row['FIO'].'</td>';
}
 ?>			   
			   
					   
					   
</table>					   
					   
					   
	
	    <table  width="100%" border="1" >
	
 <tr >
   <td class="colzag">Наименование оборудования</td>
   <td class="colzag">Класс</td>
  <td class="colzag">Индивидуальный номер</td>
  <td class="colzag">Дата отправления в ремонт</td>
 
 </tr>		   			   
<?php
include('..\databaseconnect.php');
if (!$link) {
 die('Ошибка соединения: ' . mysql_error());
}
mysql_select_db("to");
mysql_set_charset("utf8");
$result = mysql_query("SELECT *
FROM remont t1

INNER JOIN oborudovanie t2 ON t1.id_ob = t2.oborud_id
INNER JOIN vid_oborud t3 ON t2.id_vid = t3.id_vid
WHERE zanyato =  '2' and chek_vozvr='0'", $link);
if (!$result) {
 die('Неверный запрос: ' . mysql_error());
}
 echo '<tr><td class="col1">'."<b>В ремонте:</b>".'</td></tr>';
while ($row = mysql_fetch_assoc($result)) {
  echo '<tr  id="row-'.$row['name_ob'].'">';
 echo '<td class="col1">'.$row['name_ob'].'</td>';
  echo '<td class="col1">'.$row['vid_ob'].'</td>';
  echo '<td class="col1">'.$row['oborud_id'].'</td>';
 echo '<td class="col1">'.$row['data_otpr'].'</td>';

}
 ?>			   
			   
					   
					   
</table>					   
					   
					   
					   
	
	
					   
					   
	    <table  width="100%" border="1" >
				
	
 <tr >
  <td class="colzag">Наименование оборудования</td>
  <td class="colzag">Тип оборудования</td>
  <td class="colzag">Индивидуальный номер</td>
  <td class="colzag">Дата ввода в эксплуатацию</td>
 </tr>		   			   
<?php
include('..\databaseconnect.php');
if (!$link) {
 die('Ошибка соединения: ' . mysql_error());
}
mysql_select_db("to");
mysql_set_charset("utf8");
$result = mysql_query("SELECT *
FROM oborudovanie t1
INNER JOIN vid_oborud t2 ON t1.id_vid = t2.id_vid
WHERE zanyato =  '0'", $link);
if (!$result) {
 die('Неверный запрос: ' . mysql_error());
}
 echo '<tr><td class="col4">'."<b>Свободно:</b>".'</td></tr>';
while ($row = mysql_fetch_assoc($result)) {
  echo '<tr  id="row-'.$row['name_ob'].'">';
 echo '<td class="col4">'.$row['name_ob'].'</td>';
 echo '<td class="col4">'.$row['vid_ob'].'</td>';
  echo '<td class="col4">'.$row['oborud_id'].'</td>';
 echo '<td class="col4">'.$row['data_vvoda'].'</td>';
}
 ?>	
	
					   
					   
</table>

	
					   
					   
					   
					 </center>  
			
	   

</table>
</table>

