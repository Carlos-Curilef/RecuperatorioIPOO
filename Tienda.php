<?php

class Tienda{
    private $nombre; 
    private $direccion; 
    private $telefono; 
    private $colProductos;
    private $colVentasRealizadas;

    public function __construct($nombre, $direccion, $telefono,$colProductos, $colVentasRealizadas){
        $this->nombre = $nombre;
        $this->direccion = $direccion;
        $this->telefono = $telefono;
        $this->colProductos = $colProductos;
        $this->colVentasRealizadas = $colVentasRealizadas;;
    }


    // GETTERS

    public function getNombre(){
        return $this->nombre;
    }
    public function getDireccion(){
        return $this->direccion;
    }
    public function getTelefono(){
        return $this->telefono;
    }
    public function getColProductos(){
        return $this->colProductos;
    }
    public function getColVentasRealizadas(){
        return $this->colVentasRealizadas;
    }

    // SETTERS

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }
    public function setDireccion($direccion){
        $this->direccion = $direccion;
    }
    public function setTelefono($telefono){
        $this->telefono = $telefono;
    }
    public function setColProductos($colProductos){
        $this->colProductos = $colProductos;
    }
    public function setColVentasRealizadas($colVentasRealizadas){
        $this->colVentasRealizadas = $colVentasRealizadas;
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
        $cartel = "Nombre de la tienda: " . $this->getNombre() . "\n";
        $cartel .= "Teléfono: " . $this->getTelefono() . "\n";
        $cartel .= "Dirección: " . $this->getDireccion() . "\n";
        $cartel .= "Colección de productos: \n";
        $cartel .= $this->muestraArreglo($this->getColProductos());
        $cartel .= "Colección de productos vendidos: \n";
        $cartle .= $this->muestraArreglo($this->getColVentasRealizadas()); 

        return $cartel;
    }

    /** Implementar el método buscarProducto que dado un código de barra por parámetro, retorna la el subíndice donde se encuentra un objeto producto
     *  con ese código de barra. En caso de no encontrar el código de barra en la colección de productos retornar */

    public function buscarProducto($codigBarra){
        $indice = 0;
        $cantProductos = count($this->getColProductos());
        $encontrado = false;
        $arrayProductos = $this->getColProductos();

         while($indice < $cantProductos && !$encontrado){

                $objProducto = $arrayProductos[$indice];
                if ($objProducto->getCodigBarra() == $codigBarra){
                    $encontrado = true;
                }else{
                $indice++;
            }
        }

        if ($encontrado == false){
            $indice = -1;
        }

        return $indice;
    }

    /**
    *  Implementar el método realizarVenta que recibe por parámetro con arreglos asociativos que contienen la siguiente información: código barra 
    *  correspondiente a un producto y cantidad de ejemplares del producto  que desea venderse.  
    *   El procedimiento debe buscar los productos según el código de barra, verificar el stock disponible y realizar 
    *   el registro de la venta en caso de ser posible. El procedimiento debe retornar un objeto Venta con los ítems correspondientes a aquellos 
    *   productos que se pudo vender. 
     */

     public function realizarVenta($colInfoVentas){
        $nuevaVenta = null;

        foreach($colInfoVentas as $venta) {
            $codBarra = $colInfoVentas["codigoBarra"];
            if ($this->buscarProducto($codBarra) =! 0) {
                $stock = $colInfoVentas["stokDisponible"];
                if($stock){

                }
        }
     }


}