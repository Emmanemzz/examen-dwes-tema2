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
}
