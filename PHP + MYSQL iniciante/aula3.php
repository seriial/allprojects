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
        <ul>
            
        <?
            conexao();
            $sql_seleciona = "SELECT * FROM clientes";
            $rs_clientes = seleciona($sql_seleciona);
            while($res = mysql_fetch_assoc($rs_clientes)){
        ?>

            <li><? echo $res['nome'] ?></li>
        <?
            }
        ?>
            
        </ul>
    </body>
</html>
