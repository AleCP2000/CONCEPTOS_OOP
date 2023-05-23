<?php
class Cuenta_Bancaria{
    private $saldo;         //se tiene que utilizar metodos get() y set()
    protected $nombre;
    protected $numero_cuenta;
    public $correo;

    public function __construct($nombre, $numero_cuenta, $correo)
    {
        $this->nombre=$nombre;
        $this->numero_cuenta=$numero_cuenta;
        $this->correo=$correo;
    }

    public function setSaldo($saldo){
        $this->saldo=$saldo;

    }

    public function getSaldo(){
        return "$this->nombre, su saldo es: ".$this->saldo;

    }

    public function imprimirDatos(){
        return "Nombre del propietario: ".$this->nombre. "<br>Número de cuenta: ".$this->numero_cuenta.
        "<br>Correo Electrónico: ".$this->correo;
    }

}

$cuenta = new Cuenta_Bancaria("Iván Hernández",257891456,"ivan@hotmail.com");
echo $cuenta->imprimirDatos();

$cuenta->setSaldo(500);
echo "<br>".$cuenta->getSaldo();

class Comprobante extends Cuenta_Bancaria{
    public function imprimirComprobante(){
        return "<br>El comprobante es para: $this->nombre";
    }
}

$comprobante = new Comprobante("Iván Hernández",257891456,"ivan@hotmail.com");
echo $comprobante->imprimirComprobante();

?>