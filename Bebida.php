<?php
// Clase Bebida que hereda de Artículo

class Bebida extends Articulo {
    public $tamanio;
    public $temperatura;
    
    public function __construct($nombre, $precio, $disponibilidad, $categoria, $tamanio, $temperatura) {
        parent::__construct($nombre, $precio, $disponibilidad, $categoria);
        $this->tamanio = $tamanio;
        $this->temperatura = $temperatura;
    }
}