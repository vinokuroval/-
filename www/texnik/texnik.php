<?php
session_start();// вся процедура работает на сессиях. Именно в ней хранятся данные пользователя, пока он находится на сайте. Очень важно запустить их в самом начале странички!!!
	   
?>

<link rel="stylesheet" type="text/css" href="style/style.css">

<meta http-equiv="Content-Type" content="text/html; Charset=UTF-8">
<script type="text/javascript" src="jquery.js"></script>


<script type="text/javascript">
function submit()
{

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




</script>









<style>
   
   #left { text-align: left; }
   #right { text-align: right; }
   #center { text-align: center; }

   }
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
 echo "Здравствуйте, ".$_SESSION['FIO']."<br> ";
 echo "Ваша должность:  ".$_SESSION['doljnost']."<br>";
echo "Ваше рабочие место: ".$_SESSION['komnata']."<br>";
?>


<script language="JavaScript">
<!--
document.write(datastr);
-->
</script>



<div  id="timedisplay"></div>




<form action="admin/razregistr.php" >

<p>
<button  class="style">  Разрегистрация </button>

<p>
</form>


<form action="izm_dann.php" >

<p>
<button  class="style">  Изменить данные </button>
<!--**** Кнопочка (type="submit") отправляет данные на страничку testreg.php ***** --> 

</p>
</form>

</th>
</table>
</center>
</div>



<div  id="timedisplay"></div>

<br>





<!--

						<div id="content"></div>
	
	<script>
		function show()
		{
			$.ajax({
				url: "texnik/ajax_texnik.php",
				cache: false,
				success: function(html){
					$("#content").html(html);
				}
			});
		}
	
		$(document).ready(function(){
			show();
			setInterval('show()',1000);
		});
	</script>
	-->
	
	
<!--<audio id="audio-new-message" src="1.wav"></audio>-->

 <a id="content"></a>
<script>
var old_html = "";

 function showw()
{
    $.ajax({
        url: "texnik/ajax_texnik.php",
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
	
	
				


</body>
</html>