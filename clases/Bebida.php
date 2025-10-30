<?php
// Clase Bebida que hereda de Artículo
class Bebida extends Articulo{
    public $size;

    public function __construct($nombre, $precio,$disponibilidad,$categoria,$size){
        parent::__construct($nombre,$precio,$disponibilidad,$categoria);
        $this->size=$size;
    }

    public function getSize(){
        return $this->size;
    }

    public function setSize($size){
        $this->size=$size;
        return $this;
    }
}
