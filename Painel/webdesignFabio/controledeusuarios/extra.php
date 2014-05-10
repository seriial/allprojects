<?
	session_start();
	if(!isset($_SESSION['email_liberado']) && !isset($_SESSION['senha_liberado'])){
		header("Location: login.php");
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<h1>ESTA É A PAGINA EXTRA</h1>
<h1>você tem acesso!</h1>

<a href="index.php">Voltar para pagina inicial</a>
</body>
</html>