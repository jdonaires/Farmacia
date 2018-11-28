<?php

class transporte
{


    private $idtransporte;
    private $ruc;
    private $placa;

    public function __GET($x)
    {
        return $this->$x;
    }
    public function __SET($x, $y)
    {
        return $this->$x = $y;
    }
}
?>
