<?php
session_start();// вся процедура работает на сессиях. Именно в ней хранятся данные пользователя, пока он находится на сайте. Очень важно запустить их в самом начале странички!!!


	 $FIO = $_SESSION['FIO'];  
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



<br>

<form action="admin/razregistr.php" >

<p>
<button  class="style" >Разрегистрация</button>
<!--**** Кнопочка (type="submit") отправляет данные на страничку testreg.php ***** --> 

</p>
</form>

<form action="izm_dann.php" >

<p>
<button  class="style">Изменить данные</button>
<!--**** Кнопочка (type="submit") отправляет данные на страничку testreg.php ***** --> 

</p>
</form>

<br><br>
</th>
</div>
</table>
</center>



<table width="100%" border="10px">
	 
	 
			<th id="top" width="25%">
			
			
			<br>
			
				   
				   <div>
<a onclick="hidetxt('div1'); return false;" href="#" rel="nofollow">
		Зарегистрировать сотрудника<br><br>
</a>
<div style="display:none;" id="div1">
<form action="admin/save_user.php" method="post">
<!--**** save_user.php - это адрес обработчика. То есть, после нажатия на кнопку "Зарегистрироваться", данные из полей отправятся на страничку save_user.php методом "post" ***** -->
  <p>
    <label>Логин сотрудника:*<br></label>
    <input name="login" type="text" size="15" maxlength="15">
  </p>
<!--**** В текстовое поле (name="login" type="text") пользователь вводит свой логин ***** -->  
  <p>
    <label>Пароль сотрудника:*<br></label>
    <input name="password" type="password" size="15" maxlength="15">
  </p>
   <p>
    <label>ФИО сотрудника:*<br></label>
    <input name="FIO" type="text" size="35" maxlength="50">
  </p>
  <p>
  <label>Выбирите уровень доступа сотрудника:*</label><br>
<p><input name="dolzn" type="radio" value="1"> Доступно всё (режим администратора)</p> 
<p><input name="dolzn" type="radio" value="2" > Доступно оборудование склада (режим складского рабочего)</p>
<p><input name="dolzn" type="radio" value="3"> Доступ к ремонту оборудования (режим техника)</p>
<p><input name="dolzn" type="radio" value="0" checked> Доступно обращение технику (режим пользователя)</p>
  <label>Выбирите Должность сотрудника:*</label><br> 

<?php
include('databaseconnect.php');
$result = mysql_query("SELECT id_doljn, doljnost FROM spisok_doljnostei ORDER BY doljnost", $link);
if (!$result) {
 die('Неверный запрос: ' . mysql_error());
}
echo '
<select  name="doljnost">
<option selected disabled hidden value=""></option>
	<optgroup label="Сотрудники ЭСА и ТМ">';
while ($row = mysql_fetch_assoc($result)) {
$doljnost = $row['doljnost'];
$unit_id=$row['id_doljn'];

echo '<option value="'.$unit_id.'"> ' .$doljnost.' </option>';
}

	echo '
	</optgroup>
 </select>';
?>
</p>
<!--**** В текстовое поле (name="login" type="text") пользователь вводит свой логин ***** -->  
  <p>
    <label>Кабинет (рабочее место) сотрудника:*<br></label>
    <input name="komnata" type="text" size="35" maxlength="50">
  </p>
  
<!--**** В поле для паролей (name="password" type="password") пользователь вводит свой пароль ***** -->  
<p>
*обязательно для заполнения<br><br>
<button  class="style">Зарегистрировать</button>
<!--**** Кнопочка (type="submit") отправляет данные на страничку save_user.php ***** -->  

</p></form>

</div>
				   
				   
				   <div>
<a onclick="hidetxt('div2'); return false;" href="#" rel="nofollow"> Добавить сотруднику АРМ (при наличии на складе): <br><br> </a>
<div style="display:none;" id="div2">


<form action="admin/save_otvetstv.php" method="POST">



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
$result = mysql_query("SELECT oborud_id, name_ob FROM oborudovanie WHERE zanyato =  '0' and id_vid = '6'", $link);
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
<button  class="style">Добавить   </button>

</form>

</div>
				


<hr><br>

				
				   
				
				   
				   
				   				<a onclick="hidetxt('div3'); return false;" href="#" rel="nofollow">Вывести список оборудования отдела<br><br></a>
<div style="display:none;" id="div3">
<form action="zapros/vblvod.php" method="POST">

<p><input name="prov" type="radio" value="1" checked> Всё</p> 		
<p><input  name="prov" type="radio" value="2" > На складе</p>
<p><input  name="prov" type="radio" value="3" > Используется</p>
<p><input  name="prov" type="radio" value="4" > В ремонте</p>

<button  class="style"> Вывести  </button>
</form>
</div>
			    <?php
				//<a href='admin/vblvod_to.php' >Вывести все компьютеры прошедшие ТО<br><br></a>
				 //<a href="admin/vblvod_not_to.php" >Вывести все компьютеры не прошедшие ТО<br><br></a>
				?>
				
				
				<a onclick="hidetxt('div4'); return false;" href="#" rel="nofollow">Вывести список внеплановых неисправностей АРМ<br><br></a>
<div style="display:none;" id="div4">
<form action="zapros/poshin_mejdu.php" method="POST">


   <p>С: 
   <input type="date" name="s"
    max="2107-11-11" min="2012-05-29"></p>
   
 
   <p>По: 
   <input type="date" name="po"
    max="2107-11-11" min="2012-05-29"></p>
	
	<p><input name="prov" type="radio" value="1" checked> Все техники</p> 
		
<p><input  name="prov" type="radio" value="2" > Отдельный техник исправивший проблему</p>


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
	<optgroup label="Техники ЭСА и ТМ">';
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
				
<button  class="style">  Вывести </button>
</form>			
				</div>
				


<a onclick="hidetxt('div5'); return false;" href="#" rel="nofollow">Вывести ТО<br><br></a>
<div style="display:none;" id="div5">

<form action="zapros/vblvod_to.php" method="POST">

<p><input name="prov" type="radio" value="1" checked> Предстоящее</p> 		
<p><input  name="prov" type="radio" value="2" > Прошедшее</p>

 <p>С: 
   <input type="date" name="s"
    max="2107-11-11" min="2012-05-29"></p>
   
 
   <p>По: 
   <input type="date" name="po"
    max="2107-11-11" min="2012-05-29"></p>


<button  class="style">  Вывести </button>
</form>
</div>










				
			</th>
						
					
			<th>
			           
					   
					   

					   <div id="box">
					   
					<!--   <audio id="audio-new-message" src="1.wav"></audio> -->

					<div id="content"></div>
	
	<script>
var old_html = "admin.php";
 function showw()
{
    $.ajax({
        url: "admin/ajax_admin.php",
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
				
 

</body>
</html>