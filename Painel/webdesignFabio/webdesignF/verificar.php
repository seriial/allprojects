<?
	include "conexao.php";

	$produto = $_POST['produto'];

	$sql_list = mysql_query("SELECT * FROM dentista WHERE nome = '$produto'");
	
	/* MYSQL_NUM_ROWS FAZ UMA PESQUISA NO BANCO E RETORNA A QUANTIDADE ( numeros )*/
	$pesquisar = mysql_num_rows($sql_list);
	

	if($pesquisar == 1){
		echo "Esse valor já existe";
		echo $pesquisar;
	}else{
		echo "Este valor pode ser cadastrado";
		echo $pesquisar;
	}
?>
