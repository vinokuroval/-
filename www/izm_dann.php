<?
session_start();
 include("databaseconnect.php");
 ?>
 



<style>
   
   #left { text-align: left; }
   #right { text-align: right; }
   #center { text-align: center; }

   }
  </style>



<link rel="stylesheet" type="text/css" href="style/style.css">








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
<div id="left"><br><br><br><br>
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
<!DOCTYPE html>
<html>
<head>
<meta charset = "utf8">
<script src="../functions.js"></script>
		<script>					
			function changePass() {
				var 
					password = document.getElementById('pass').value;
					
				makeRequest({
					url: 'change_db.php',
					method: 'POST',
					params: {
						
						password: password
						
					},
					func: function(xhr) {
						if(!xhr.responseText.trim()) {
							alert("Успешно изменено");
							
						}
						else {
							alert("что-то не так");
						}
					}
				});
			}
			function changekomn() {
				var 
					komnata = document.getElementById('komn').value;
					
				makeRequest({
					url: 'change_db.php',
					method: 'POST',
					params: {
						
						komnata: komnata
						
					},
					func: function(xhr) {
						if(!xhr.responseText.trim()) {
							alert("Успешно изменено");
							
						}
						else {
							alert("что-то не так");
						}
					}
				});
			}
		</script>
</head>
<body>  
</table>

<?
$login = $_SESSION['login'];

	$result = mysql_query("SELECT * FROM users
								where login = '$login'");
	$res = mysql_fetch_assoc($result);
echo "Пароль:";
	echo'
	

	<input style="margin-top:10px;" value="'.$res['password'].'" id="pass" /><button onclick="changePass();" class="style" style="margin-left:15px">Изменить</button></BR>
	
	';
	
	
	echo "Кабинет:";
	echo'
	

	<input style="margin-top:10px;" value="'.$res['komnata'].'" id="komn" /><button onclick="changekomn();" class="style"  style="margin-left:15px; margin-top:10px;">Изменить</button>
	
	';
	
	
	
	
	
	
?>

<form action="chek.php" >

<p>
<button  class="style">  Назад </button>
<!--**** Кнопочка (type="submit") отправляет данные на страничку testreg.php ***** --> 

</p>
</form>
 </body>
</html>

