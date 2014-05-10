<?
require_once ('funcoes.php');
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    <?
    if(isset($_POST('enviar'))):
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        conexao();
        $sql_insert = "INSERT INTO tabela (nome) VALUES ('$nome','$sobrenome')";
        if(inserir($sql_insert)):
            echo ('Registro incluido com sucesso! ID do registro: '.  mysql_insert_id());
            unset ($_POST['enviar']);
        else:
            echo ('Erro na inserção: ' .  mysql_error());
        endif;
    endif;    
        
    ?>
        <form method="POST" enctype="multipart/form-data" action="">
            <input type="text" name="nome"/> <br/>
            <input type="text" name="sobrenome"/><br/>
            <input type="submit" name="enviar" value="Cadastrar"/><br/>
        </form>    
    </body>
</html>
