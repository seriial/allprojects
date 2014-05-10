<?
	$ip_db = "localhost";
	$login_db = "root";
	$senha_db =  "root";
	$nome_db = "db_odonto";
	
	$conn = mysql_connect($ip_db,$login_db,$senha_db);
	$db_select = mysql_select_db($nome_db);
		
?>