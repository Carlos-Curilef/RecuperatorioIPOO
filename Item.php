<?php

Class Item {
    private $cantVendida;
    private $objProducto;

    public function __construct($cantVendida, $objProducto) {
        $this->cantVendida = $cantVendida;
        $this->objProducto = $objProducto;
    }

    // GETTERS
    public function getCanVendida() {
        return $this->cantVendida;
    }
    public function getObjProducto() {
        return $this->objProducto;
    }

    // SETTERS

    public function setCanVendida($cantVendida) {
        $this->cantVendida = $cantVendida;
    }
    public function setObjProducto($objProducto) {
        $this->objProducto = $objProducto;
    }

    public function __toString(){
        $cartel = "Cantidad vendida: " . $this->getCanVendida() . "\n";
        $cartel .= "Producto: \n";
        $cartel .= $this->getObjProducto();

        return $cartel;
    }
       

    
}
