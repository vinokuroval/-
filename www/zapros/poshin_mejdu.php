<?php
session_start();// вся процедура работает на сессиях. Именно в ней хранятся данные пользователя, пока он находится на сайте. Очень важно запустить их в самом начале странички!!!   
$s = $_POST['s'];
$polz = $_POST['polz'];
$prov = $_POST['prov'];
$po = $_POST['po'];
if (($s==0)and($po==0)){
echo '<a href="\chek.php"><button>Введите даты поиска</button></a>';
echo'<br>';
echo'<br>';
}


?>

<b>Ремонт оборудования

<?php

if (($s!=0)and($po!=0)){
echo 'C:  ';
echo $s;
echo'  ';
echo'По:  ';
echo $po;
echo'</b><br>';
}


?>

<table  width="100%" border="" >

<tr>
					  <td class="colzag">Состояние</td>
					  <td class="colzag">Сообщение</td>
					  <td class="colzag">Местонахождение</td>
					  <td class="colzag">Сотрудник</td>
					  <td class="colzag">Дата составления заявки</td>
					  <td class="colzag">Дата рассмотрения заявки</td>
					  <td class="colzag">Рассматривающий заявку</td>
					  <td class="colzag">Подтверждение ремонта</td>
					  
					  
					 </tr>


<?php
if ($prov=='1'){

     
//$query ="SELECT * FROM komputer";
 
include('..\databaseconnect.php');
					if (!$link) {
					 die('Ошибка соединения: ' . mysql_error());
					}
					mysql_select_db("to");
					mysql_set_charset("utf8");

					$result = mysql_query("SELECT t1.data_ispr, t1.chek_message, t1.dop_inf, t2.komnata, t2.FIO, t1.data_sozd, t1.ispravil, t1.podtverjd_pol
FROM message t1
INNER JOIN users t2 ON t1.id = t2.id
WHERE chek_message =  'Исправен'
AND t1.data_ispr >=  '$s'
AND t1.data_ispr <=  '$po'
ORDER BY t1.data_ispr", $link);
					if (!$result) {
					 die('Неверный запрос: ' . mysql_error());
					}

					while ($row = mysql_fetch_assoc($result)) {
					  echo '<tr id="row-'.$row['chek_messeage'].'">';
					 echo '<td class="colpolomk">'.$row['chek_message'].'</td>';
					 echo '<td class="colpolomk">'.$row['dop_inf'].'</td>';
					 echo '<td class="colpolomk">'.$row['komnata'].'</td>';
					 echo '<td class="colpolomk">'.$row['FIO'].'</td>';
					 echo '<td class="colpolomk">'.$row['data_sozd'].'</td>';
					 echo '<td class="colpolomk">'.$row['data_ispr'].'</td>';
					 echo '<td class="colpolomk">'.$row['ispravil'].'</td>';
					 echo '<td class="colpolomk">'.$row['podtverjd_pol'].'</td>';
					}

}

?>

<?php
if ($prov=='2'){

     
//$query ="SELECT * FROM komputer";
 
include('..\databaseconnect.php');
					if (!$link) {
					 die('Ошибка соединения: ' . mysql_error());
					}
					mysql_select_db("to");
					mysql_set_charset("utf8");

					$result = mysql_query("SELECT t1.data_ispr, t1.chek_message, t1.dop_inf, t2.komnata, t2.FIO, t1.data_sozd, t1.ispravil, t1.podtverjd_pol
FROM message t1
INNER JOIN users t2 ON t1.id = t2.id
WHERE chek_message =  'Исправен' and ispravil='$polz'
AND t1.data_ispr >=  '$s'
AND t1.data_ispr <=  '$po'
ORDER BY t1.data_ispr", $link);
					if (!$result) {
					 die('Неверный запрос: ' . mysql_error());
					}

					while ($row = mysql_fetch_assoc($result)) {
					  echo '<tr id="row-'.$row['chek_messeage'].'">';
					 echo '<td class="colpolomk">'.$row['chek_message'].'</td>';
					 echo '<td class="colpolomk">'.$row['dop_inf'].'</td>';
					 echo '<td class="colpolomk">'.$row['komnata'].'</td>';
					 echo '<td class="colpolomk">'.$row['FIO'].'</td>';
					 echo '<td class="colpolomk">'.$row['data_sozd'].'</td>';
					 echo '<td class="colpolomk">'.$row['data_ispr'].'</td>';
					 echo '<td class="colpolomk">'.$row['ispravil'].'</td>';
					 echo '<td class="colpolomk">'.$row['podtverjd_pol'].'</td>';
					}

}

?>




</table>











<br>



<style type="text/css" media="print">
button {display: none; }
</style>

<a href="\chek.php"><button>Назад</button></a>






<button onclick="window.print();">Печать</button>

</th>
</tr>
</table>
