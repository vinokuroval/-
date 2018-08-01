<?php
session_start();// вся процедура работает на сессиях. Именно в ней хранятся данные пользователя, пока он находится на сайте. Очень важно запустить их в самом начале странички!!!
?>

<style>
   body {
    background-image: url(\/img/fon.jpg); 
	
   }
  </style>

<body>
<?php

         session_destroy();
	   
echo "Ваш логин разрегистрирован<br><a href='\index.php'>ОК</a>";
?>
</body>