<?
require_once ('funcoes.php');
conexao();
if((isset($_GET['acao'])) && ($_GET['acao'] == 'excluir') && (isset($_GET['id']))):
    $sql_deletar = "DELETE FROM clientes WHERE id =".$_GET['id'];
    excluir($sql_deletar);
    unset($_GET['acao']);
    unset($_GET['id']);
endif;
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
        <ul>            
        <?            
            $sql_seleciona = "SELECT * FROM clientes";
            $rs_clientes = seleciona($sql_seleciona);
            while($res = mysql_fetch_assoc($rs_clientes)){
        ?>
            <li><? echo $res['nome'] ?>  <? echo $res['sobrenome'] ?>  | 
                <a href="aula5.php?acao=excluir&id=<? echo $res['id'] ?>"> Excluir   <a/> </li>
        <?
            }
        ?>
            
        </ul>
    </body>
</html>
