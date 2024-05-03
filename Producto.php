<?php

Class Producto{
    private $codigBarra; 
    private $marca;
    private $color;
    private $talle;
    private $descripcion;
    private $cantStock;

    public function __construct($codigBarra, $marca, $color, $talle, $descripcion, $cantStock){
        $this->codigBarra = $codigBarra;
        $this->marca = $marca;
        $this->color = $color;
        $this->talle = $talle;
        $this->descripcion = $descripcion;
        $this->cantStock = $cantStock;
    }

    // GETTERS

    public function getCodigBarra(){
        return $this->codigBarra;
    }
    public function getMarca(){
        return $this->marca;
    }
    public function getColor(){
        return $this->color;
    }
    public function getTalle(){
        return $this->talle;
    }
    public function getDescripcion(){
        return $this->descripcion;
    }
    public function getCanStock(){
        return $this->cantStock;
    }

    // SETTERS

    public function setCodigoBarra($codigBarra){
        $this->codigBarra = $codigBarra;
    }
    public function setMarca($marca){
        $this->marca = $marca;
    }
    public function setColor($color){
        $this->color = $color;
    }
    public function setTalle($talle){
        $this->talle = $talle;
    }
    public function setDescripcion($descripcion){
        $this->descripcion = $descripcion;
    }
    public function setCantStock($canStock){
        $this->cantStock = $canStock;
    }

    public function __toString(){
        $cartel = "Código de barra: " . $this->getCodigBarra() . "\n";
        $cartel .= "Marca: " . $this->getMarca() . "\n";
        $cartel .= "Color: " . $this->getColor() . "\n";
        $cartel .= "Talle: " . $this->getTalle() . "\n";
        $cartel .= "Descripción: " . $this->getDescripcion()  . "\n";
        $cartel .= "Cantidad de stock: " . $this->getCanStock() . "\n";

        return $cartel;
    }

    public function actualizarStock($cantStock){
        if ($cantStock != 0){

                $this->setCantStock($this->getCanStock() + $cantStock);
        }
    }

}