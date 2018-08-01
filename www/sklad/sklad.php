<?php
session_start();// вся процедура работает на сессиях. Именно в ней хранятся данные пользователя, пока он находится на сайте. Очень важно запустить их в самом начале странички!!!


	 $FIO = $_SESSION['FIO'];  
	 $id = $_SESSION['id'];  
	  $doljnost = $_SESSION['doljnost'];  
	 $komnata = $_SESSION['komnata'];  
?>

 <link rel="stylesheet" type="text/css" href="style/style.css">
 
 
<meta http-equiv="Content-Type" content="text/html; Charset=UTF-8">
<script type="text/javascript" src="jquery.js"></script>



<script type="text/javascript">
var show;
function hidetxt(type){
param=document.getElementById(type);
if(param.style.display == "none") {
if(show) show.style.display = "none";
param.style.display = "block";
show = param;
}else param.style.display = "none"
}
</script>

<style>
   #left { text-align: left; }
   #top { vertical-align:top;}
   #right { text-align: right; }
   #center { text-align: center; }

   }
  </style>


<script>
window.onload= function() {
   
       
		 var div = document.getElementById('box');
	 var tr = document.getElementsByTagName('table').item(2).getElementsByTagName('tr').length;
	 
    if(tr == '1' ) {
        div.style.display = 'none';
        this.innerHTML = 'Проверить ответы техника на ваши запросы';
    }
    else {
        div.style.display = 'block';
        this.innerHTML = 'Проверить ответы техника на ваши запросы';
    }
		
        return false;
    };





function openbox() {
   
	 
}


</script>



<style>
   #left { text-align: left; }
   #top { vertical-align:top;}
   #right { text-align: right; }
   #center { text-align: center; }
   hr {
    border: none; /* Убираем границу */
    background-color: #A29696; /* Цвет линии */
    color: #A29696; /* Цвет линии для IE6-7 */
    height: 3px; /* Толщина линии */
   } 
   
  </style>



<style type="text/css">
   td.col1 { background: red; color: black; }
   td.col2 { background: #ff9900; color: black; }
   td.col3 { background: #e3fc03; color: black;}
   td.col4 { background: #49fc03; color: black;}
   td.col5 { background: #ffffff; color: black;}
   td.colzag { background: #cccfca; color: black;}
   td.colpolomk { background:  #ff0000; color: black;}
  </style>


<style>
   a { 
    text-decoration: none; /* Отменяем подчеркивание у ссылки */
   } 
   a { color: Blue; }
a:hover { color: black; }
a.active { color: black; }
  </style>
  
  
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
 
 


 
 

 
//INSERT INTO oborudovanie (id, pass) values('TestUser', '123456')

</script>




<script type="text/javascript">

function submit()
{
var x;
var podtv=confirm("Пожалуйста, подтвердите действие!");
if (podtv)
{
  config = {
   url: "admin/remont.php?message_id="+idx,
   func: function(xmlhttp) {
	 if(xmlhttp.responseText == 1) {		 
      var row = document.getElementById("row-"+idx);
      row.parentNode.removeChild(row);	     
	 };
   }
  };
 
  makeRequest(config);
   window.location.reload();
  }
else
  {
   window.location.reload();
  }
}

function remont(idx)
{
var x;
var podtv=confirm("Пожалуйста, подтвердите действие!");
if (podtv)
  {
  config = {
   url: "admin/remont.php?message_id="+idx,
   func: function(xmlhttp) {
	 if(xmlhttp.responseText == 1) {		 
      var row = document.getElementById("row-"+idx);
      row.parentNode.removeChild(row);	     
	 };
   }
  };
 
  makeRequest(config);
   window.location.reload();
  }
else
  {
   window.location.reload();
  }
}



function to_ob(idx)
{
var x;
var podtv1=confirm("Пожалуйста, подтвердите действие!");
if (podtv1)
  {
  config = {
   url: "admin/to.php?oborud_id="+idx,
   func: function(xmlhttp) {
	 if(xmlhttp.responseText == 1) {		 
      var row = document.getElementById("row-"+idx);
      row.parentNode.removeChild(row);	     
	 };
   }
  };
 
  makeRequest(config);
   window.location.reload();
  }
else
  {
   window.location.reload();
  }
}

</script>


<script type="text/javascript">
function getDate()
{
    var date = new Date();
    var hours = date.getHours();
    var minutes = date.getMinutes();
    var seconds = date.getSeconds();
    //По надобности условие ниже повторить с minutes и hours
    if(seconds < 10)
    {
        seconds = '0' + seconds;
    }

    document.getElementById('timedisplay').innerHTML ='Время:'+' '+ hours + ':' + minutes + ':' + seconds;
}
setInterval(getDate, 0);
</script>

<script language="JavaScript">
<!--
dayarray=new Array("воскресенье","понедельник","вторник","среда","четверг","пятница","суббота")
montharray=new Array ("января","февраля","марта","апреля","мая","июня","июля","августа","сентября","октября","ноября","декабря")
ndata=new Date();
day=dayarray[ndata.getDay()];
month=montharray[ndata.getMonth()];
date=ndata.getDate();
year=ndata.getYear();
hours = ndata.getHours();
mins = ndata.getMinutes();
secs = ndata.getSeconds();
if (hours < 10) {hours = "0" + hours }
if (mins < 10) {mins = "0" + mins }
if (secs < 10) {secs = "0" + secs }
datastr=("Сегодня: "+ date +" "+ month +", "+day+" ")
-->
</script>
</head>

<body>


<center>
<table  width="80%" border="0">

<th>
<div id="left">
<img src="\2017.png">
</div>
</th>
<th>
<div id='right'>
<?php
 echo "Здравствуйте, ".$_SESSION['FIO']."<br> Ваша должность:  ".$_SESSION['doljnost']."<br>";
echo "Ваше рабочие место: ".$_SESSION['komnata']."<br>";
?>

<div id='right'>
<script language="JavaScript">
<!--
document.write(datastr);
-->
</script>

























<div  id="timedisplay"></div>
</div>



<br><div id='right'>

<form action="sklad/razregistr.php" >

<p>
<button  class="style">  Разрегистрация </button>
<!--**** Кнопочка (type="submit") отправляет данные на страничку testreg.php ***** --> 

</p>
</form>




<form action="izm_dann.php" >

<p>
<button  class="style"> Изменить данные  </button>
<!--**** Кнопочка (type="submit") отправляет данные на страничку testreg.php ***** --> 

</p>
</form>
<br></div>
<br><br>
</th>
</table>
</center>










<table width="100%" border="10px">
	 
	 
			<th id="top" width="25%">
			
			
			<br>
			
				   
				   
				   
				   
				   
				   
				   
				   
				   
				   
				   
				   
				   
				   
				   
				   <div> <a onclick="hidetxt('div1'); return false;" href="#" rel="nofollow"> Зарегистрировать новый вид оборудования<br><br> </a>
<div style="display:none;" id="div1">


<form action="sklad/save_vid.php" method="post">
<!--**** save_user.php - это адрес обработчика. То есть, после нажатия на кнопку "Зарегистрироваться", данные из полей отправятся на страничку save_user.php методом "post" ***** -->
  <p>
    <label>Вид оборудования:<br></label>
    <input name="vid_ob" type="text" size="15" maxlength="15">
  </p>
<!--**** В текстовое поле (name="login" type="text") пользователь вводит свой логин ***** -->  
 
<button  class="style">Добавить   </button>
<!--**** Кнопочка (type="submit") отправляет данные на страничку save_user.php ***** -->  

</p></form>

</div>
				   
				   
				   
				   
				   
				   
				   
				   
				   
				   
				   
				   
				   
				   
				   
				   
				   
				   
				   
				   
				   
				   
				   <div> <a onclick="hidetxt('div2'); return false;" href="#" rel="nofollow">Добавить оборудование на склад<br><br> </a>
<div style="display:none;" id="div2">


<form action="sklad/save_oborud.php" method="POST">



<p>Введите название оборудования:<br> 
<input name="name_ob" type="text" size="15" maxlength="150">



<p>Выбирите вид оборудования:<br> 

</p>

<?php

include('databaseconnect.php');
$result = mysql_query("SELECT id_vid, vid_ob FROM vid_oborud", $link);
if (!$result) {
 die('Неверный запрос: ' . mysql_error());
}
echo '
<select name="polz">
<option selected disabled hidden value=""></option>
	<optgroup label="Свободное оборудование на складе">';
while ($row = mysql_fetch_assoc($result)) {
$polz = $row['vid_ob'];
$unit_id=$row['id_vid'];

echo '<option value="'.$unit_id.'"> ' .$polz.' </option>';
}

	echo '
	</optgroup>
 </select>';
 
//<button onclick="addProduct()" style="margin-left:8px">Добавить</button><br><br>
?>

<br>
<br>
<button  class="style">  Добавить </button>

</form>

</div>
				
				
				
				
				
				



   <div> <a onclick="hidetxt('div3'); return false;" href="#" rel="nofollow">Выдать оборудование со склада<br><br> </a>
<div style="display:none;" id="div3">

<form action="sklad/save_otvetstv.php" method="POST">


<br>
<label>Выбирите сотрудника:</label><br> 

<?php
include('databaseconnect.php');
$result = mysql_query("SELECT id, FIO FROM users", $link);
if (!$result) {
 die('Неверный запрос: ' . mysql_error());
}
echo '
<select  name="polz">
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




</p>
<p>Выбирите оборудование:<br>
<?php
include('databaseconnect.php');
$result = mysql_query("SELECT oborud_id, name_ob FROM oborudovanie WHERE zanyato =  '0' and id_vid != '6'", $link);
if (!$result) {
 die('Неверный запрос: ' . mysql_error());
}
echo '
<select name="oborud">
<option selected disabled hidden value=""></option>
	<optgroup label="Свободное оборудование на складе">';
while ($row = mysql_fetch_assoc($result)) {
$oborud = $row['name_ob'];
$unit_id=$row['oborud_id'];

echo '<option value="'.$unit_id.'"> ' .$oborud.'____И.Н. №'.$unit_id.' </option>';
}

	echo '
	</optgroup>
 </select>';
 
//<button onclick="addProduct()" style="margin-left:8px">Добавить</button><br><br>
?>




<br>
<br>
<button  class="style">  Выдать оборудование </button>		   
</form>

</div>				
			









   <div> <a onclick="hidetxt('div4'); return false;" href="#" rel="nofollow">Принять оборудование на склад после работ<br><br> </a>
<div style="display:none;" id="div4">

<form action="sklad/save_vozvr_oborud.php" method="POST">





</p>
<p>Выбирите оборудование:<br>
<?php
include('databaseconnect.php');

$result = mysql_query("SELECT oborud_id, name_ob FROM oborudovanie WHERE zanyato =  '1' and id_vid != '6'", $link);
if (!$result) {
 die('Неверный запрос: ' . mysql_error());
}
echo '
<select name="vozvr_oborud">
<option selected disabled hidden value=""></option>
	<optgroup label="Выданое оборудование для работ на станции">';
while ($row = mysql_fetch_assoc($result)) {
$oborud = $row['name_ob'];
$unit_id=$row['oborud_id'];

echo '<option value="'.$unit_id.'"> ' .$oborud.'____И.Н. №'.$unit_id.' </option>';
}

	echo '
	</optgroup>
 </select>';
 
//<button onclick="addProduct()" style="margin-left:8px">Добавить</button><br><br>
?>




<br>
<br>
<button  class="style">  Принять оборудоване на склад </button>			   
</form>

</div>					
				   
	






<div> <a onclick="hidetxt('div5'); return false;" href="#" rel="nofollow">Отправить оборуование в неплановый ремонт<br><br> </a>
<div style="display:none;" id="div5">

<form action="sklad/save_otpr_rem.php" method="POST">




</p>
<p>Выбирите оборудование:<br>
<?php
include('databaseconnect.php');
$result = mysql_query("SELECT oborud_id, name_ob FROM oborudovanie WHERE zanyato =  '0' ", $link);
if (!$result) {
 die('Неверный запрос: ' . mysql_error());
}
echo '
<select name="v_rem">
<option selected disabled hidden value=""></option>
	<optgroup label="Свободное оборудование на складе">';
while ($row = mysql_fetch_assoc($result)) {
$oborud = $row['name_ob'];
$unit_id=$row['oborud_id'];

echo '<option value="'.$unit_id.'"> ' .$oborud.'____И.Н. №'.$unit_id.' </option>';
}

	echo '
	</optgroup>
 </select>';
 
//<button onclick="addProduct()" style="margin-left:8px">Добавить</button><br><br>
?>




<br>
<br>
<button  class="style">  Отправить в ремонт </button>			   
</form>

</div>				
			




			
			
			
			
			<div> <a onclick="hidetxt('div6'); return false;" href="#" rel="nofollow">Принять оборудование с ремонта<br><br> </a>
<div style="display:none;" id="div6">

<form action="sklad/save_prin_rem.php" method="POST">




</p>
<p>Выбирите починеное оборудование:<br>
<?php
include('databaseconnect.php');
$result = mysql_query("SELECT * FROM remont t1 
INNER JOIN oborudovanie t2 ON t1.id_ob = t2.oborud_id WHERE chek_vozvr='0' ", $link);
if (!$result) {
 die('Неверный запрос: ' . mysql_error());
}
echo '
<select name="iz_rem">
<option selected disabled hidden value=""></option>
	<optgroup label="В ремонте:">';
while ($row = mysql_fetch_assoc($result)) {
$oborud = $row['name_ob'];
$unit_id=$row['oborud_id'];

echo '<option value="'.$unit_id.'"> ' .$oborud.'____И.Н. №'.$unit_id.' </option>';
}

	echo '
	</optgroup>
 </select>';
 
//<button onclick="addProduct()" style="margin-left:8px">Добавить</button><br><br>
?>




<br>
<br>
<button  class="style"> Принять на склад  </button>			   
</form>

</div>		

<hr><br>

			
				   
				   
				   				<a onclick="hidetxt('div7'); return false;" href="#" rel="nofollow">Вывести список оборудования отдела<br><br></a>
<div style="display:none;" id="div7">
<form action="zapros/vblvod.php" method="POST">

<p><input name="prov" type="radio" value="1" checked> Всё</p> 		
<p><input  name="prov" type="radio" value="2" > На складе</p>
<p><input  name="prov" type="radio" value="3" > Используется</p>
<p><input  name="prov" type="radio" value="4" > В ремонте</p>

<button  class="style">Вывести   </button>
</form>
</div>
			    <?php
				//<a href='admin/vblvod_to.php' >Вывести все компьютеры прошедшие ТО<br><br></a>
				 //<a href="admin/vblvod_not_to.php" >Вывести все компьютеры не прошедшие ТО<br><br></a>
				?>
				
				
				<a onclick="hidetxt('div8'); return false;" href="#" rel="nofollow">Вывести список внеплановых неисправностей АРМ<br><br></a>
<div style="display:none;" id="div8">
<form action="zapros/poshin_mejdu.php" method="POST">


   <p>С: 
   <input type="date" name="s"
    max="2107-11-11" min="2012-05-29"></p>
   
 
   <p>По: 
   <input type="date" name="po"
    max="2107-11-11" min="2012-05-29"></p>
	
	<p><input name="prov" type="radio" value="1" checked> Все сотрудники</p> 
		
<p><input  name="prov" type="radio" value="2" > Отдельный сотрудник</p>


<label>Выбирите сотрудника:</label><br> 

<?php
include('databaseconnect.php');
$result = mysql_query("SELECT id, FIO FROM users where doljn='5'", $link);
if (!$result) {
 die('Неверный запрос: ' . mysql_error());
}
echo '
<select  name="polz">
<option selected disabled hidden value=""></option>
	<optgroup label="Сотрудники ЭСА и ТМ">';
while ($row = mysql_fetch_assoc($result)) {
$polz = $row['FIO'];
$polz=$row['FIO'];

echo '<option value="'.$polz.'"> ' .$polz.' </option>';
}

	echo '
	</optgroup>
 </select>';
 
//<button onclick="addProduct()" style="margin-left:8px">Добавить</button><br><br>



?>
   
<br>
<br>
				
<button  class="style"> Вывести  </button>
</form>			
				</div>
				


<a onclick="hidetxt('div9'); return false;" href="#" rel="nofollow">Вывести ТО<br><br></a>
<div style="display:none;" id="div9">

<form action="zapros/vblvod_to.php" method="POST">

<p><input name="prov" type="radio" value="1" checked> Предстоящее</p> 		
<p><input  name="prov" type="radio" value="2" > Прошедшее</p>

 <p>С: 
   <input type="date" name="s"
    max="2107-11-11" min="2012-05-29"></p>
   
 
   <p>По: 
   <input type="date" name="po"
    max="2107-11-11" min="2012-05-29"></p>

<button  class="style"> Вывести  </button>
</form>
</div>

			
			
			
			
			
			



	
				
				
				</div>
				</div>
				</div>
				</div>
				
			</th>
						
			
			<th>
			           
					   
					   
					   

					 
					   </div>
					   
					   
					   
					   
					   
					   	   
					   
					   
					<div id="content"></div>
	
	<script>
var old_html = "";
 function showw()
{
    $.ajax({
        url: "sklad/ajax_sklad.php",
        cache: false,
        success: function(html){
            if (html != old_html) {
                
                $("#content").html(old_html = html);
                
                var audio = $("#audio-new-message")[0];
                audio.currentTime = 0;
                audio.play();
 
            }
        }
    });
}
 
 
$(document).ready(function(){  
            showw();  
            setInterval('showw()',1000);  
        });  
 
</script>

	</div>
					   
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
include('\databaseconnect.php');
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
include('\databaseconnect.php');
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
include('\databaseconnect.php');
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


 

</body>
</html>