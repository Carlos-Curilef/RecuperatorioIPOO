<?php
Class Venta {
    private $fecha;
    private $cliente; 
    private $nroFactura;
    private $tipoComprobante; // (Tipo A o B) 
    private $colItemsVendidos;

    public function __construct($fecha, $cliente, $nroFactura, $tipoComprobante, $colItemsVendidos){
        $this->fecha = $fecha;
        $this->cliente = $cliente;
        $this->nroFactura = $nroFactura;
        $this->tipoComprobante = $tipoComprobante;
        $this->colItemsVendidos = $colItemsVendidos;
    }

    // GETTERS

    public function getFecha() {
        return $this->fecha;
    }
    public function getCliente() {
        return $this->cliente;
    }
    public function getNroFactura() {
        return $this->nroFactura;
    }
    public function getTipoComprobante(){
        return $this->tipoComprobante;
    }
    public function getColItemsVendidos(){
        return $this->colItemsVendidos;
    }

    // SETTERS

    public function setFecha($fecha){
        $this->fecha = $fecha;
    }
    public function setCliente($cliente){
        $this->cliente = $cliente;
    }
    public function setNroFactura($nroFactura){
        $this->nroFactura = $nroFactura;
    }
    public function setTipoComprobante($tipoComprobante){
        $this->tipoComprobante = $tipoComprobante;
    }
    public function setColItemsVendidos($colItemsVendidos){
        $this->colItemsVendidos = $colItemsVendidos;
    }

    private function muestraArreglo($arreglo){
        $cadena = "";
    
        if(count($arreglo) == 0){
            $cadena = "[Esta colección no tiene elementos]\n";
        } else {
            for($i=0; $i < count($arreglo); $i++){
                $cadena = $cadena . "Elemento N°". $i+1 . ": ". $arreglo[$i] ."\n";
            }
        }
        return $cadena;
    }

    public function __toString(){
        $cartel = "Fecha: " . $this->getFecha() . "\n";
        $cartel .= "Cliente: " . $this->getCliente() . "\n";
        $cartel .= "Número de factura: " . $this->getNroFactura() . "\n";
        $cartel .= "Tipo de comprobante: ". $this->getTipoComprobante() . "\n";
        $cartel .= "Colección de ítems vendidos: \n";
        $cartel .= $this->muestraArreglo($this->getColItemsVendidos());

        return $cartel;
    }

    /*
    Se pide un método incorporarProducto que recibe por parámetro un producto y la cantidad que desea registrarse en la venta. 
    Si es posible realizar la venta, teniendo en cuenta la cantidad solicitada y la cantidad en stock del producto, se crea un item y 
    se incorpora a la colección de items de la venta. Recordar que debe actualizarse el stock del producto si la venta se realiza con éxito.
    El método debe retornar el objeto de productos modificado si se pudo realizar la venta o null en caso contrario.
     */

     public function incorporarProducto($objProducto, $cantRegistrarVenta){

        if ($objProducto->getCanStock() >= $cantRegistrarVenta){
            $unItem = new Item($cantRegistrarVenta,$objProducto);
            $items = $this->getColItemsVendidos();
            array_push($items, $unItem );
            $objProducto->actualizarStock($cantRegistrarVenta);
        } else {
            $objProducto = null;
        }

        return $objProducto;
     }
}