<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Untitled Document</title>
</head>

<script type="text/javascript" src="jquery-2.0.3.min.js"></script>
<script type="text/javascript" src="jquery.corner.js"></script>
<script type="text/javascript">
    $(document).ready(function(){

    $("#web").corner("br 50px;");

    $("#pesquisar").focus(apagar);

    $("#pesquisar").blur(valor);

    })

    function apagar(){
        $("#pesquisar").attr("value","");
    }

    function valor(){
        $("#pesquisar").attr("value","Pesquisar");
    }


    /*
    * Função abaixo para mascarar campos, falta achar o mask.js do jquery e usar a função exemplo abaixo
    *
    * $(function(){

     $('input[@name=cpf]').mask('999.999.99-99');


     })
    *
    * */

</script>

<style type="text/css" media="all">
    #web{
        height:100px;
        width:200px;
        background: #99FF00;
        font-family:Arial, Helvetica, sans-serif;
        font-size: 20px;
        color: #000000;
        text-align: center;
        border: 4px #FF0000 solid;
    }

</style>

<body>

<div id="web">
    <form id="form1" name="form1" method="post" action="">
        <label>
            <input type="text" name="pesquisar" id="pesquisar" value="pesquisar"/>
        </label>
    </form>
</div>

</body>
</html>
