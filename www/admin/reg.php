<html>
<head>
<title>Регистрация</title>
<style>
   body {
    background-image: url(\/img/fon.jpg); 	
   }
  </style>
</head>
<body>

<h2>Регистрация</h2>
<form action="save_user.php" method="post">

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
    <input name="FIO" type="text" size="50" maxlength="50">
  </p>
<!--**** В текстовое поле (name="login" type="text") пользователь вводит свой логин ***** -->  
  <p>
    <label>Кабинет (рабочее место) сотрудника:*<br></label>
    <input name="komnata" type="text" size="50" maxlength="50">
  </p>
  
<!--**** В поле для паролей (name="password" type="password") пользователь вводит свой пароль ***** -->  
<p>
*обязательно для заполнения<br><br>
<input type="submit" name="submit" value="Зарегистрироваться">
<!--**** Кнопочка (type="submit") отправляет данные на страничку save_user.php ***** -->  

</p></form>
</body>
</html>
