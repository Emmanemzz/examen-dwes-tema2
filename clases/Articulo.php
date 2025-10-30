<?php
// Clase Artículo
abstract class Articulo{
    public $nombre;
    public $precio;
    public $disponibilidad;
    public $categoria;

    public function __construct($nombre, $precio, $disponibilidad, $categoria){
        $this->nombre=$nombre;
        $this->precio=$precio;
        $this->disponibilidad=$disponibilidad;
        $this->categoria=$categoria;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function setNombre($nombre){
        $this->nombre=$nombre;
        return $this;
    }

    public function getPrecio(){
        return $this->precio;
    }

    public function setPrecio($precio){
        $this->precio=$precio;
        return $this;
    }

    public function getDisponibilidad(){
        return $this->disponibilidad;
    }

    public function setDisponibilidad($disponibilidad){
        $this->disponibilidad=$disponibilidad;
        return $this;
    }

    public function getCategoria(){
        return $this->categoria;
    }

    public function setCategoria($categoria){
        $this->categoria=$categoria;
        return $this;
    }
}