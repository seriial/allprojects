<?php
    function conexao(){
        $banco = "db_testes";
        $usuario ="root";
        $senha = "root";
        $host = "localhost";
        $conn = mysql_connect($host,$usuario,$senha) or die ('erro na rotina de conexão '.  mysql_error());
        mysql_select_db($banco) or die ('erro na rotina de seleção de banco!'.  mysql_error());
        mysql_query("SET NAMES 'utf8'");
        mysql_query("SET character_set_connection=utf8");
        mysql_query("SET character_set_client=utf8");
        mysql_query("SET character_set_results=utf8");        
    }
    function inserir ($sql){
        if(mysql_query($sql)):
            return true;
        else:
            return false;
        endif;
    }
    
    function atualizar ($sql){
        if(mysql_query($sql)):
            return true;
        else:
            return false;
        endif;
    }    
    
    function excluir ($sql){
        if(mysql_query($sql)):
            return true;
        else:
            return false;
        endif;
    }      
    
    function seleciona($sql){
        return mysql_query($sql);
    }
?>