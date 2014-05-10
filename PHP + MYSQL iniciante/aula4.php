<?
require_once ('funcoes.php');
conexao();
if(isset($_POST['atualizar'])):
    $sql_atualizadb = "UPDATE clientes SET nome='".$_POST['nome']."', sobrenome ='".$_POST['sobrenome']."' WHERE id =".$_POST['id'];
    atualizar($sql_atualizadb);
    unset($_POST['atualizar']);
    unset($_GET['acao']);
    unset($_GET['id']);
endif;
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?
            if((isset($_GET['acao'])) && ($_GET['acao'] == 'alterar') && (isset($_GET['id']))):
                $sql_update = "SELECT * FROM clientes WHERE id = ".$_GET['id']." LIMIT 1";
                $rs_atualiza = seleciona($sql_update);
                while($resupdate = mysql_fetch_assoc($rs_atualiza)):
                ?>
                <form method="POST" enctype="multipart/form-data" action="">
                    <input type="text" name="nome" value="<? echo $resupdate['nome'] ?>"/> <br/>
                    <input type="text" name="sobrenome" value="<? echo $resupdate['sobrenome'] ?>"/><br/>
                    <input type="hidden" name="id" value="<? echo $resupdate['id'] ?>"/>
                    <input type="submit" name="atualizar" value="Atualizar"/><br/>
                </form>    
                <?
                endwhile;
            endif;
        ?>
        <ul>            
        <?            
            $sql_seleciona = "SELECT * FROM clientes";
            $rs_clientes = seleciona($sql_seleciona);
            while($res = mysql_fetch_assoc($rs_clientes)){
        ?>

            <li><? echo $res['nome'] ?>  <? echo $res['sobrenome'] ?>  | 
                <a href="aula4.php?acao=alterar&id=<? echo $res['id'] ?>"> Alterar   <a/> </li>
        <?
            }
        ?>
            
        </ul>
    </body>
</html>
