<?php
require_once ("base.class.php");
class clientes extends base{
    public function __construct($campos=array()) {
        parent::__construct();
        $this->tabela="clientes";
        if(sizeof($campos)<= 0):
            $this->campos_valores = array(
                "nome" => null,
                "sobrenome" => null
            );
        else:
            $this->campos_valores = $campos;
        endif;
        $this->campopk = "id";
    }
}//fim classe clientes
?>
