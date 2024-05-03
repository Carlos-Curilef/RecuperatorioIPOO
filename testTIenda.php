<?php

include_once "Producto.php";

$producto = new Producto("940380343","Nesquik","Marrón","2.50 kg","Es un chocolate", 100);
echo $producto;
$producto->actualizarStock(0);
echo $producto;