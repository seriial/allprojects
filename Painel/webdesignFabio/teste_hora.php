<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Untitled Document</title>
</head>

<body>

<?
    $hora = date('d/m/y - H:i s');
?>

<script language="javascript">
    function hora(){
        if(confirm("Deseja ver a hora?")){
            alert('<? echo $hora ?>');
            Location.href="login.php";
        }else{
            alert('você não quis ver as hora nego!  ');
        }
    }
</script>

<input type="button" name="nome" id="nome" value="ver horas" onclick="hora()"/>

</body>
</html>
