<?php
/*una clase  Funcones*/

class Funciones{
    private $nombre;
    private $precio;

    //Metodo constructor
    public function __construct($nombre,$precio){
        $this->nombre=$nombre;
        $this->precio=$precio;
        }

    //Metodos de acceso
    public function getNombre() {
        return $this->nombre;
        }

    public function getPrecio() {
        return $this->precio;
        }
    public function setNombre($nombre) {
        $this->nombre = $nombre;	
        }

    public function setPrecio($precio) {
        $this->precio = $precio;
        }

    //Metodo cambiar nombre y precio de funcion
    public function cambiarNombrePrecioFuncion($newNombre,$newPrecio){
        $this->setNombre($newNombre);
        $this->setPrecio($newPrecio);
    }
    
}
