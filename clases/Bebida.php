<?php
// Clase Bebida que hereda de Artículo
class Bebida extends Articulo{
    public $size;
    public $temperatura;

    public function __construct($nombre, $precio,$disponibilidad,$categoria,$size,$temperatura){
        parent::__construct($nombre,$precio,$disponibilidad,$categoria);
        $this->size=$size;
        $this->temperatura=$temperatura;
    }
    public function getSize(){
        return $this->size;
    }

    public function setSize($size){
        $this->size=$size;
        return $this;
    }

    public function getTemperatura(){
        return $this->temperatura;
    }

    public function setTemperatura($temperatura){
        $this->temperatura=$temperatura;
        return $this;
    }
}
