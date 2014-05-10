<?
	session_start();
	
	unset($_SESSION['email_liberado']);
	unset($_SESSION['senha_liberado']);
	
	header("Location: login.php");

?>