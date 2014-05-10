<?php
require_once ("classes/dados.class.php");
//$cliente = new clientes();
//
//$cliente->delCampo('sobrenome');
//$cliente->addCampo('bairro','bairro tal');
//
//$cliente->setValor('nome','GustavoAtualizado');
//$cliente->setValor('sobrenome','GustavoAtualizado');
//$cliente->valorpk = 2; 
//$cliente->delCampo('nome');
//$cliente->setvalor('bairro','centro');
//
//$cliente->inserir($cliente);
//$cliente->atualizar($cliente);
//$cliente->deletar($cliente);
//$cliente->extras_select = "LIMIT 3";
//$cliente->selecionaTudo($cliente);
//$cliente->selecionaCampos($cliente);
//while($res = $cliente->retornaDados()):
//    echo $res->id .' / '.$res->nome.' / '. $res->sobrenome .'<br/>';
//endwhile;
//
//echo '<hr />';
//
//echo '<pre>';
//print_r($cliente);
//echo '</pre>';
//echo $cliente->linhasafetadas.' registro(a) incluido(a) com sucesso!';


$dado = new dados();


$dado->addCampo('marca');
$dado->selecionaCampos($dado);
while($res = $dado->retornaDados()):
    echo $res->titulo .'/'. $res->modelo .'<br/>';
endwhile;

echo '<pre>';
print_r($dado);
echo '</pre>';

?>

