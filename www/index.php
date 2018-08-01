<?php
// вся процедура работает на сесиях. Именно в ней хранятся данные пользователя, пока он находится на сайте. Очень важно запустить их в самом начале странички!!!
session_start();
?>
<html>
<head>

<title>Главная страница</title>
<style>
   body {
    background-image: url(img/fon.jpg); 	
   }
  </style>
<link rel="stylesheet" type="text/css" href="style/style.css">


</head>
<body>
<h2>Главная страница</h2>
<form action="testreg.php" method="post">
<!--**** testreg.php - это адрес обработчика. То есть, после нажатия на кнопку "Войти", данные из полей отправятся на страничку testreg.php методом "post" ***** -->
  <p>
    <label>Ваш логин:<br></label>
    <input name="login" type="text" size="15" maxlength="15">
  </p>
<!--**** В текстовое поле (name="login" type="text") пользователь вводит свой логин ***** -->  
  <p>
    <label>Ваш пароль:<br></label>
    <input name="password" type="password" size="15" maxlength="15">
  </p>
<!--**** В поле для паролей (name="password" type="password") пользователь вводит свой пароль ***** -->  
<p>
<button  class="style">  Войти </button>
<!--**** Кнопочка (type="submit") отправляет данные на страничку testreg.php ***** --> 
<br>
<!--**** ссылка на регистрацию, ведь как-то же должны гости туда попадать ***** --> 

</p></form>
<br>
<?php
// Проверяем, пусты ли пересменные логина и id пользователя


   
 
   
echo "Вы вошли на сайт, как гость. Для продолжения работы войдите в систему введя свои учётные данные.<br>";

   
   
   
?>
</body>
</html>
