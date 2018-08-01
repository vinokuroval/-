<?	
	session_start();
	include 'connect.php';
	$login = $_SESSION['login'];
	$komnata = $_POST['komnata'];
	$password = $_POST['password'];	
	
	if(isset($password)){
		$_SESSION['password']=$password; 
	mysql_query("UPDATE users SET password='".$password."' WHERE login='".$login."'");
	};
	if(isset($komnata)){
	mysql_query("UPDATE users SET komnata='".$komnata."' WHERE login='".$login."'");
	}
	echo mysql_error();
?>