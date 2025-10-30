<?php
// Clase Bebida que hereda de Artículo

require 'Articulo.php';

class Bebida extends Articulo {
    public $tamanio;
    
    public function __construct($nombre, $precio, $disponibilidad, $categoria, $tamanio) {
        parent::__construct($nombre, $precio, $disponibilidad, $categoria);
        $this->tamanio = $tamanio;
    }

    //De igual manera que en Articulo, no es necesario getters y setters al ser atributos públicos
}