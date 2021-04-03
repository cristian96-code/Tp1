<?php
/*Un teatro se caracteriza por su nombre y su dirección y en él se 
realizan 4 funciones al día. Cada función tiene un nombre y un precio.

Realice la implementación de la clase Teatro e implemente los métodos 
necesarios para cambiar el nombre del teatro, la dirección, 
el nombre de una función y el precio.

Implementar las 4 funciones usando un array que almacena la información 
correspondiente a cada función. Cada función es un array asociativo con 
las claves “nombre” y “precio”.

Implementar un script testTeatro.php que cree una instancia de la clase 
Teatro y presente un menú  que permita cargar la información del Teatro, 
modificar y ver sus datos 
*/

class Teatro{
    private $nombreTeatro;
    private $direccion;
    private $funciones;

    //Metodo constructor
    public function __construct($nombreTeatro, $direccion, $funciones){
        $this->nombreTeatro = $nombreTeatro;
        $this->direccion = $direccion;
        $this->funciones = $funciones;
    }

    //Metodos de acceso
    public function getNombreTeatro(){
        return $this->nombreTeatro;
    }
    public function getDireccion(){
        return $this->direccion;
    }
    public function getFunciones(){
        return $this->funciones;
    }
    public function setNombreTeatro($nombreTeatro){
        $this->nombreTeatro = $nombreTeatro;
    }
    public function setDireccion($direccion){
        $this->direccion = $direccion;
    }
    public function setFunciones($funciones){
        $this->funciones = $funciones;
    }

    //Metodo funciones, nombres y precios
    public function functions(){
        $nroFunciones = $this->getFunciones();
        $verFunciones = "";
        for($i=0 ; $i<count($nroFunciones) ; $i++){
            $nFunciones = $i+1;
            $verFunciones = $verFunciones.$nFunciones.
            " Nombre: ".$nroFunciones[$i]->getNombre().
            " || Precio: $".$nroFunciones[$i]->getPrecio()."\n";
        }
        return $verFunciones;

        /*$funciones = [
            ["nombre"=>"La Fierecilla Domada", "precio"=>500],
            ["nombre"=>"Hamlet", "precio"=>250],
            ["nombre"=>"Don Juan Tenorio", "precio"=>350],
            ["nombre"=>"Fuente Ovejuna", "precio"=>400]
        ];*/
    }
    
    //Metodo Cambiar nombre de teatro
    public function cambiarNameT($nameTeatro){
        
        $this->setNombreTeatro($nameTeatro);
        
        
    }
    //Metodo cambiar nombre de direccion
    public function cambiarDireccionT($otradireccion){
        
        $this->setDireccion($otradireccion);
        
    }   

    /*public function cambiarNameF($nameFuncion,$newName){
        $nroFuncion = $this->getFunciones();
        
        for($i=0 ; $i<count($nroFuncion) ; $i++){
            
            if($nroFuncion[$i]->getNombre() == $nameFuncion){

                $nroFuncion[$i]->setNombre($newName);
                
            }
        }
        return $nroFuncion;
    }

    public function cambiarPrecioF($nameFuncion,$newPrecio){
        $nroFuncion = $this->getFunciones();
        
        for($i=0 ; $i<count($nroFuncion) ; $i++){
            
            if($nroFuncion[$i]->getNombre() == $nameFuncion){
                
                $nroFuncion[$i]->setPrecio($newPrecio);
                
            }
            $i++;
        }
        return $nroFuncion;
    }*/

    //Metodo __toString
    public function __toString(){

    return "\nNombre del teatro: ".$this->getNombreTeatro().
    "\nDireccion: ".$this->getDireccion().
    "\n \n"."FUNCIONES: \n".$this->functions();
    }
}
