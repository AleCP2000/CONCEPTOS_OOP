<?php
class Animal{
    public function hacerSonido(){
        return "Los animales hacen sonidos diferentes";
    }
}

class Gato extends Animal{
    public function hacerSonido(){
        return "Los gatos maullan";
    }
}

class Gallo extends Animal{
    public function hacerSonido(){
        return "Los gallos cantan al amanecer";
    }
}

class Perro extends Animal{
    public function hacerSonido(){
        return "Los perros ladran";
    }
}

$gato=new Gato();
echo $gato->hacerSonido()."<br>";

$gallo=new Gallo();
echo $gallo->hacerSonido()."<br>";

$perro=new Perro();
echo $perro->hacerSonido()."<br>";
?>