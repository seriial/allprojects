<?
	session_start();
	
	include "conexao.php";
	
	$email = $_POST['email'];
	$senha = $_POST['senha'];

	$sql = mysql_query("SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'");
	if(mysql_num_rows($sql) == 1){
	
		$_SESSION['email_liberado'] = $email;
		$_SESSION['senha_liberado'] = $senha;
	
		header("Location: index.php");
	}else{
		unset($_SESSION['email_liberado']);
		unset($_SESSION['senha_liberado']);
		
		echo "<script>alert('Dados incorretos!');</script>";
		header("Location: login.php");
	}
	




?>