<?php
session_start();// вся процедура работает на сессиях. Именно в ней хранятся данные пользователя, пока он находится на сайте. Очень важно запустить их в самом начале странички!!!
	   
?>


<link rel="stylesheet" type="text/css" href="style/style.css">








<style>
   
   #left { text-align: left; }
   #right { text-align: right; }
   #center { text-align: center; }

   }
  </style>









<style>
   a { 
    text-decoration: none; /* Отменяем подчеркивание у ссылки */
   } 
   a { color: Blue; }
a:hover { color: black; }
a.active { color: black; }
  </style>
  
  
  


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



<style type="text/css">
   body {
   background-image: url(\/img/fon.jpg); 
   }
  
   td { padding: 0px; }
   td.col1 { background: red; color: black; }
   td.col2 { background: #ff9900; color: black; }
   td.col3 { background: #e3fc03; color: black;}
   td.col4 { background: #49fc03; color: black;}
   td.colzag { background: #cccfca; color: black;}
   td.colpolomk { background:  #ff0000; color: black;}
  
  </style>

  
  
  
  <script>
window.onload= function() {
   
       
		 var div = document.getElementById('box');
	 var tr = document.getElementsByTagName('table').item(1).getElementsByTagName('tr').length;
	 
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


</head>
<body>





<center>
<table  width="80%" border="0px">

<th>
<div id="left">
<img src="/2017.png">
</div>
</th>
<th>
<div id='right'>
<?php
echo "Здравствуйте, ".$_SESSION['FIO']."<br>";
echo "Ваше рабочие место: ".$_SESSION['komnata']."<br>";
?>


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
<button  class="style">  Изменить данные </button>
<!--**** Кнопочка (type="submit") отправляет данные на страничку testreg.php ***** --> 

</p>
</form>


<br><br>
</th>
</table>
</center>




<div  id="timedisplay"></div>

<br>









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
 echo '<td><button  class="styletable"  onclick="podtv_rem('.$row['message_id'].')">Подтвердить ремонт</button>
			<button  class="styletable"  onclick="otmena_rem('.$row['message_id'].')">Ремонт не выполнен</button></td></tr>';
			
}













mysql_close($link);

?>
</table>
</center>


</div>




<br><br>



<h2>Cообщение технику</h2>
<form action="polz/save_mesegge.php" method="post">
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
   url: "polz/podtv_rem.php?message_id="+idx,
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
   url: "polz/otmena_rem.php?message_id="+idx,
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






</body>
</html>