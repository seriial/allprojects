<?php
require_once ("base.class.php");
class dados extends base{
    public function __construct($campos=array()) {
        parent::__construct();
        $this->tabela="dados";
        if(sizeof($campos)<= 0):
            $this->campos_valores = array(
                "titulo" => null,
                "marca" => null,
                "modelo" => null
            );
        else:
            $this->campos_valores = $campos;
        endif;
        $this->campopk = "id";
    }
}//fim classe clientes
?>