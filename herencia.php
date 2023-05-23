<?php
/**
 * Herencia: Es cuando una clase puede reutilizarlos atributos y métodos de otra clase
 */

class Persona{
    public $nombre;
    public $dirección;
    public $telefono;
    public $edad;

    public function __construct($nombre, $direccion, $edad, $telefono)
    {
        $this->nombre=$nombre;
        $this->direccion=$direccion;
        $this->edad=$edad;
        $this->telefono=$telefono;
    }

    public function imprimirDatos(){
        return "Datos Personales<br> Nombre: ".$this->nombre. "<br>Dirección: ".$this->direccion. 
                "<br>Edad: ".$this->edad."<br>Teléfono: ".$this->telefono."<br>";
    }           

 }

class Paciente extends Persona{
    public $enfermedades;
    public $responsable;

    public function __construct($nombre, $direccion, $edad, $telefono, $enfermedades, $responsable){
        //llamando al costructor padre
        parent::__construct($nombre, $direccion, $edad, $telefono);
        //continuando con los demás atributos
        $this->enfermedades=$enfermedades;
        $this->responsable=$responsable;
    }

    public function infoPaciente(){
        return "Enfermedades: ".$this->enfermedades."<br>Responsable: ".$this->responsable."<br>";
    }
}

class Doctor extends Persona{
    public $especializacion;
    public $lugar_trabajo;

    public function __construct($nombre, $direccion, $edad, $telefono, $especializacion, $lugar_trabajo){
        //llamando al costructor padre
        parent::__construct($nombre, $direccion, $edad, $telefono);
        //continuando con los demás atributos
        $this->especializacion=$especializacion;
        $this->lugar_trabajo=$lugar_trabajo;
    }

    public function infoDoctor(){
        return "Especialización: ".$this->especializacion."<br>Lugar de trabajo: ".$this->lugar_trabajo."<br>";
    }
}

echo "<h3>Información del Paciente</h3>";
$paciente= new Paciente("Julio Román", "San Salvador", 25, 77095429, "Diabetico", "Karla Murcia");
echo $paciente->imprimirDatos();
echo "<br>". $paciente->infoPaciente();

echo "<h3>Información del Doctor</h3>";
$doctor=new Doctor("Keren Chacón", "Cabañas", 45, 73928308, "Psicología", "Hospital de Cabañas");
echo $doctor->imprimirDatos();
echo "<br>". $doctor->infoDoctor();
?>