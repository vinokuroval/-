<?
	$conn = mysql_connect("localhost", "root", "");
	if (!$conn) {
	    echo "Unable to connect to DB: " . mysql_error();
	    exit;
	}

	if (!mysql_select_db("to")) {
	    echo "Unable to select base: " . mysql_error();
	    exit;
	}
	mysql_set_charset("utf8");
	mysql_query("SET NAMES utf8")
?>