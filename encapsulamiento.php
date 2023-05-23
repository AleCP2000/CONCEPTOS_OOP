<?php
/**
 * Encapsulamiento: Es la manera de como podemos restringir los atributos y metodos de una clase.
 * Modificadores de clase: public, private, protected
 * public: acceso general, hay acceso dentro y fuera de la clase y tambien en clases heredadas
 * protected: solamente acceso dentro de la clase y clases heredadas
 */

class Animal{
    public $nombre;
    protected $edad=4;
}

$animal=new Animal();
$animal->nombre="Mordiditas";
echo $animal->nombre;
// $animal->edad=4; aquí nos da error porque es protected, pero al hacerlo  en clase heredada sí es posible

class Gato extends Animal{
    public function obtenerGato(){
        $animal2=new Gato();
        $animal2->nombre="Mordiditas";
        echo "<br>Su nombre es: ". $animal2->nombre . " y su edad es: ". $this->edad;
    }
}
$animal3 =new Gato();
echo $animal3->obtenerGato(); 
?>