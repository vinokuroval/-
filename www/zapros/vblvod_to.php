<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
</head>
<body>

<?php
$po = $_POST['po'];
$s = $_POST['s'];
$prov = $_POST['prov'];



if (($s==0)and($po==0)){
echo '<a href="\chek.php"><button>Введите даты поиска</button></a>';
echo'<br>';
echo'<br>';
}



if($prov=='2'){
	echo '<b>Оборудование, прошедшие ТО</b><br>';
}
if($prov=='1'){
	echo '<b>Назначенное ТО</b><br>';
}
?>





					   <table width="100%" border="1" >
					  
	
	
	

  
  
  
    
  
    
  
  
 
  





<?php


if (($s!=0)and($po!=0)){
echo '<b>C:  ';
echo $s;
echo'  ';
echo'По:  ';
echo $po;
echo'</b><br><br>';
}


if($prov=='2'){
	
	
	
	
echo ' <tr>' ;
echo '<td>Инвентарный номер</td>' ;
echo '<td>Наименование оборудования</td>' ;
echo '<td>Тип оборудования</td>' ;
echo '<td>Дата предыдущего ТО или ввода в эксплуатацию</td>' ;
echo '<td>Назначенная дата ТО</td>' ;
echo '<td>Дата проведения ТО</td>' ;
echo '<td>Состояние ТО</td>' ;
echo '<td>Ответсвенен за проведение ТО</td>' ;
echo ' </tr>' ;


$link = mysql_connect('localhost', 'root', '', 'to');
if (!$link) {
 die('Ошибка соединения: ' . mysql_error());
}
mysql_select_db("to");
mysql_set_charset("utf8");





$result = mysql_query("SELECT  t1.data_prov, t3.vid_ob, t2.name_ob, t1.oborud_id, t1.data_pred, t1.data_new, t1.chek,  t1.sotr
FROM oborudovanie_to t1

INNER JOIN oborudovanie t2 ON t1.oborud_id = t2.oborud_id
inner join vid_oborud t3 on t2.id_vid=t3.id_vid

WHERE chek =  'проведено'
AND t1.data_prov >=  '$s'
AND t1.data_prov <=  '$po'
ORDER BY  `oborud_id` ASC ", $link);

if (!$result) {
 die('Неверный запрос: ' . mysql_error());
}

while ($row = mysql_fetch_assoc($result)) {
	  echo '<tr id="row-'.$row['oborud_id'].'">';
 echo '<td>'.$row['oborud_id'].'</td>';
  echo '<td>'.$row['name_ob'].'</td>';
  echo '<td>'.$row['vid_ob'].'</td>';
 echo '<td>'.$row['data_pred'].'</td>';
 echo '<td>'.$row['data_new'].'</td>';
 echo '<td>'.$row['data_prov'].'</td>';
 echo '<td>'.$row['chek'].'</td>';
 echo '<td>'.$row['sotr'].'</td>';
}   
}







if($prov=='1'){
echo ' <tr>' ;
echo '<td>Инвентарный номер</td>' ;
echo '<td>Наименование оборудования</td>' ;
echo '<td>Тип оборудования</td>' ;
echo '<td>Ответсвенный за оборудование в данный момент времени</td>' ;
echo '<td>Дата предыдущего ТО или ввода в эксплуатацию</td>' ;
echo '<td>Назначенная дата ТО</td>' ;
echo '<td>Состояние ТО</td>' ;

echo ' </tr>' ;


$link = mysql_connect('localhost', 'root', '', 'to');
if (!$link) {
 die('Ошибка соединения: ' . mysql_error());
}
mysql_select_db("to");
mysql_set_charset("utf8");





$result = mysql_query("SELECT  t4.FIO, t1.data_prov, t3.vid_ob, t2.name_ob, t1.oborud_id, t1.data_pred, t1.data_new, t1.chek,  t1.sotr
FROM oborudovanie_to t1

INNER JOIN oborudovanie t2 ON t1.oborud_id = t2.oborud_id
inner join vid_oborud t3 on t2.id_vid=t3.id_vid
inner join users t4 on t2.vydan_polz=t4.id
WHERE chek =  'не проведено'
AND t1.data_new >=  '$s'
AND t1.data_new <=  '$po'
ORDER BY  `oborud_id` ASC ", $link);

if (!$result) {
 die('Неверный запрос: ' . mysql_error());
}

while ($row = mysql_fetch_assoc($result)) {
	  echo '<tr id="row-'.$row['oborud_id'].'">';
 echo '<td>'.$row['oborud_id'].'</td>';
  echo '<td>'.$row['name_ob'].'</td>';
  echo '<td>'.$row['vid_ob'].'</td>';
  echo '<td>'.$row['FIO'].'</td>';
 echo '<td>'.$row['data_pred'].'</td>';
 echo '<td>'.$row['data_new'].'</td>';
 echo '<td>'.$row['chek'].'</td>';
}

   
}











?>
</table>

<br><br>

<style type="text/css" media="print">
button {display: none; }
</style>

<a href="/chek.php"><button>Назад</button></a>






<button onclick="window.print();">Печать</button>



</body>

</html>