<?php

/**
 * POO: posee clases y objetos
 * Clase: Plantilla o molde donde tenemos metodos y atributos para describirnuestro objeto
 * Atributo: Caracteristicas del objeto
 * Métodos: Acciones o comportamiento del objeto
 * Construtor: Método que inicializa nuestro objeto
 */

class Vehiculo{
    //ejemplo de atributos
    public $modelo;
    public $color;
    public $marca;
    public $numero_puertas;

    //ejemplo de constructor
    public function __construct($mod, $col, $mar, $num)
    {
        $this->modelo=$mod;
        $this->color=$col;
        $this->marca= $mar;
        $this->numero_puertas= $num;
    }

    //ejmeplo de métodos
    private function encenderCarro(){
        $item="off"; //ejemplo de variable local
    }
    protected function apagarCarro(){
        
    }
    public function abrirPuerta(){
        
    }
    public function obtenerModelo($parametro_modelo){
        $this->modelo= $parametro_modelo;
        echo "Ahora el modelo es: ".$this->modelo." ";

    }
}

//Instancia: llamar a una clase
$carro= new Vehiculo("Sián", "anaranjado", "Lamborghini", 2);
print_r($carro);
echo "<br>";
$carro->obtenerModelo("Urus");
print_r($carro);

?>