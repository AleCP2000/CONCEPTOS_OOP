<?php
/**
 * Clase abstracta: Es una plantilla en donde podemos tener tributos y metodos 
 * que pueden ser heredados, pero la clase no puede ser instanciada
 */
abstract class Humano{
    public $nombre;
    public $apellido;
    public $telefono;

    /**
     * la clase abstracta siempre debe tener un método abstracto,
     * no asignamos comportamiento solo lo delaramos
     */
    abstract function saludar();

    //creamos otro método con el comportamiento que tendrá el método
    public function imprimir(){
        return "Su nombre es: ".$this->nombre;
    }
}

class Estudiante extends Humano{
    public function saludar()
    {
        return "Hola Estudiantes";
    }
}

class Profesor extends Humano{
    public function saludar()
    {
        return "Hola Profesores";
    }
}

$estudiante = new Estudiante();
echo $estudiante->saludar();

//$humano= new Humano;  Esto no se puede porque es una clase abstracta
?>