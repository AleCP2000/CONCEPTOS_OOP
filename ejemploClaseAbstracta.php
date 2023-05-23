<?php

abstract class Usuario{
    protected $nombre;
    protected $apellido;
    protected $telefono;
    protected $notaFinal;  //se agrega atributo por método verNotas en clase Alumno

    public function __construct($nombre, $apellido, $telefono)
    {
        $this->nombre=$nombre;
        $this->apellido=$apellido;
        $this->telefono=$telefono;
    }

    abstract function verPerfil();
    abstract function verNotas();
}

class Director extends Usuario{
    public $institucion;
    private $expediente; //get y set

    public function __construct($nombre, $apellido, $telefono, $institucion)
    {
        //llamando al costructor padre
        parent::__construct($nombre, $apellido, $telefono);
        //continuando con los demás atributos
        $this->institucion=$institucion;
    }
    
    public function setExpediente($expediente){
        $this->expediente=$expediente;
    }

    public function getExpediente(){
        return "El director $this->nombre está viendo el expediente de $this->expediente";
    }

    public function verPerfil()
    {
        return "<h2>Datos del Director</h2> Nombre: ".$this->nombre. "<br>Apellido: ".$this->apellido. 
                "<br>Teléfono: ".$this->telefono."<br>Institución: ".$this->institucion."<br>";
    }
    
    public function verNotas()
    {
        return "El director visuliza las notas de los estudiantes de todas las secciones";
    }
}

class Alumno extends Usuario{
    private $carnet;    //get y set
    public $horario;
    public $grado;

    public function __construct($nombre, $apellido, $telefono, $horario, $grado, $nota)
    {
        //llamando al costructor padre
        parent::__construct($nombre, $apellido, $telefono);
        //continuando con los demás atributos
        $this->horario=$horario;
        $this->grado=$grado;
        $this->notaFinal=$nota;
    }

    public function setCarnet($carnet){
        $this->carnet=$carnet;
    }

    public function getCarnet(){
        return "El estudiante $this->nombre tiene el carnet $this->carnet";
    }

    public function verPerfil()
    {
        return "<h2>Datos del Estudiante</h2> Nombre: ".$this->nombre. "<br>Apellido: ".$this->apellido. 
                "<br>Teléfono: ".$this->telefono."<br>Horario: ".$this->horario."<br>Grado: ".$this->grado."<br>";
    }

    public function verNotas()
    {
        if ($this->notaFinal >= 7) {
            echo "Aprobado";
        }else {
            echo "Reprobado";
        }
    }
}

class Profesor extends Usuario{
    public $institucion;
    private $sueldo;    //get y set

    public function __construct($nombre, $apellido, $telefono, $institucion)
    {
        //llamando al costructor padre
        parent::__construct($nombre, $apellido, $telefono);
        //continuando con los demás atributos
        $this->institucion=$institucion;
    }
    
    public function setSueldo($sueldo){
        $this->sueldo=$sueldo;
    }

    public function getSueldo(){
        return "El director $this->nombre está viendo el sueldo de $this->sueldo";
    }

    public function verPerfil()
    {
        //code...
    }

    public function verNotas()
    {
        //code...
    }
    public function listaAlumnos()
    {
        //code...        
    }
}

$director = new Director("Oscar", "Lemus", 6578412, "Institución privada");
echo $director->verPerfil();
$director->setExpediente("Correlativos");
echo $director->getExpediente();

$alumno = new Alumno("Daniel", "Hernández", 6578412, "Diurno", "Noveno", 8);
echo $alumno->verPerfil();
$alumno->setCarnet("A0016");
echo $alumno->getCarnet()."<br>";
$alumno->verNotas();

?>