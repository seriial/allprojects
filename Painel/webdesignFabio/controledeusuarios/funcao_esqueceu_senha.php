<?
    include "conexao.php";

    $email = $_POST['email'];

    $sql = mysql_query("SELECT * FROM usuarios WHERE email = '$email'");
    $verificar = mysql_num_rows($sql);
    while($listar = mysql_fetch_array($sql)){
        $nome = $listar['nome'];
        $senha = $listar['senha'];

    }

    if($verificar == 0){
        echo"Esse email não existe em nossos registros!";
    }else{
        /*
         * Aqui vai o cód para enviar email pro individuo
         * Vai com a senha e o nome que foi buscada no banco acima no while
         *
         *
         * */
    }



?>