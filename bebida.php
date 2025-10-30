<?php
// Clase Bebida que hereda de Artículo

require_once 'Articulo.php';

class Bebida extends Articulo {
    public $tamanio;
    
    public function __construct($nombre, $precio, $disponibilidad, $categoria, $tamanio) {
        parent::__construct($nombre, $precio, $disponibilidad, $categoria);
        $this->tamanio = $tamanio;
    }
}