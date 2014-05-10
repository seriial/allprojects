<?
	session_start();
	
	include "conexao.php";

	$email = $_SESSION['email_liberado'];
	$senha = $_SESSION['senha_liberado'];
	
	$sql = mysql_query("SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'");
	while($listar = mysql_fetch_array($sql)){

	if(!isset($_SESSION['email_liberado']) && !isset($_SESSION['senha_liberado'])){
		header("Location: login.php");
	}

    if($listar['status'] == "bloqueado"){
        echo " <meta http-equiv='refresh' content='0;URL=login.php'/>
             <script type=\"text/javascript\">
                alert(\"Usuário inválido\");
             </script>
        <!--
        Cód acima muito bom, da um alerta, carrega um tempo e redireciona para outra pagina!
        --!>
        ";
    }

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

    Bem vindo, <?= $listar['nome']?> !
    <?
    }
    ?>

<h1>ESTA É A PAGINA INICIAL</h1>
<h1>você tem acesso!</h1>


<a href="extra.php">pagina extra</a><br/>
<a href="sair.php">Sair do sistema</a>
</body>
</html>