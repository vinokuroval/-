




<table  width="100%" border="1">
                    <h2>Внеплановые неисправности:</h2>
					

					
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
					 echo '<td><button class="styletable" onclick="remont('.$row['message_id'].')">Оборудование исправно</button></td></tr>';
					}


					mysql_close($link);

					?>
					
					
						</tr>
					</table>

</div>
<div id="box">

<table  width="100%" border="1" >
<h2>Ваши обращения технику:</h2>
<center>
 <tr >
  <td>Неисправность</td>
  <td>Дата обнаружения</td>
  <td>Дата исправления</td>
  <td>Техник исправивший проблему</td>
  <td>Отметка о подтверждении</td>
  <td>Действие</td>
  
  
 </tr>


<?php

$link = mysql_connect('localhost', 'root', '', 'to');
if (!$link) {
 die('Ошибка соединения: ' . mysql_error());
}
mysql_select_db("to");
mysql_set_charset("utf8");

 $polz_id = $_SESSION['id'];
 


$result = mysql_query("SELECT message_id, id, dop_inf, data_sozd, data_ispr, ispravil, podtverjd_pol
FROM message
WHERE id='$polz_id' and data_ispr!='0000-00-00' and podtverjd_pol='Ремонт не подтверждён' ", $link);
if (!$result) {
 die('Неверный запрос: ' . mysql_error());
}

while ($row = mysql_fetch_assoc($result)) {
  echo '<tr id="row-'.$row['message_id'].'">';
 echo '<td>'.$row['dop_inf'].'</td>';
 echo '<td>'.$row['data_sozd'].'</td>';
 echo '<td>'.$row['data_ispr'].'</td>';
 echo '<td>'.$row['ispravil'].'</td>';
  echo '<td>'.$row['podtverjd_pol'].'</td>';
 echo '<td><button   class="style" onclick="podtv_rem('.$row['message_id'].')">Подтвердить ремонт</button>
			<button  class="style"  onclick="otmena_rem('.$row['message_id'].')">Ремонт не выполнен</button></td></tr>';
			
}













mysql_close($link);

?>
</table>
</center>


</div>




<br><br>



<h2>Cообщение технику</h2>
<form action="texnik/save_mesegge.php" method="post">
 <p>
   <label>Опишите проблему с компьютером:<br></label>
    <input name="dop_inf" type="text" size="50" maxlength="50">
	
<p>
<button  class="style">  Отправить сообщение технику </button>
<!--**** Кнопочка (type="submit") отправляет данные на страничку save_user.php ***** -->  
</p></form>

<br><br><br><br>













</table>
<script>
 function makeRequest(config) {
  var xmlhttp;
  try {
   xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
  } catch (e) {
   try {
    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
   } catch (E) {
    xmlhttp = false;
   }
  }
  if (!xmlhttp && typeof XMLHttpRequest!="undefined") {
   xmlhttp = new XMLHttpRequest();
  }
  xmlhttp.open("GET", config.url, false);
  xmlhttp.send(null);
  if(xmlhttp.status == 200) {
   config.func(xmlhttp);
  }
 };
 
 

 
 function podtv_rem(idx){
  config = {
   url: "texnik/podtv_rem.php?message_id="+idx,
   func: function(xmlhttp) {
	 if(xmlhttp.responseText == 1) {		 
      var row = document.getElementById("row-"+idx);
      row.parentNode.removeChild(row);	     
	 };
   }
  };
  
  
  makeRequest(config);
   window.location.reload();
 };
 
 

</script>





<script>
 function makeRequest(config) {
  var xmlhttp;
  try {
   xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
  } catch (e) {
   try {
    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
   } catch (E) {
    xmlhttp = false;
   }
  }
  if (!xmlhttp && typeof XMLHttpRequest!="undefined") {
   xmlhttp = new XMLHttpRequest();
  }
  xmlhttp.open("GET", config.url, false);
  xmlhttp.send(null);
  if(xmlhttp.status == 200) {
   config.func(xmlhttp);
  }
 };
 
 function otmena_rem(idx){
  config = {
   url: "texnik/otmena_rem.php?message_id="+idx,
   func: function(xmlhttp) {
	 if(xmlhttp.responseText == 1) {		 
      var row = document.getElementById("row-"+idx);
      row.parentNode.removeChild(row);	     
	 };
   }
  };
 
  makeRequest(config);
   window.location.reload();
 };
</script>






