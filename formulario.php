<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumno</title>
</head>
<body>
    <form action="" method="POST">
        <label for="">Nombre Completo:</label><br>
        <input type="text" name="nombre" placeholder="Ingrese su nombre"><br><br>
        <label for="">Edad:</label><br>
        <input type="number" name="edad" placeholder="Ingrese su edad"><br><br>
        <label for="">Grado:</label><br>
        <input type="text" name="grado" placeholder="Ingrese su grado"><br><br>
        <input type="submit" value="Enviar Datos">
    </form>
</body>

<?php
    class Alumno{
        public $nombre;
        public $edad;
        public $grado;

        public function __construct($nombre, $edad, $grado)
        {
            $this->nombre = $nombre;
            $this->edad = $edad;
            $this->grado = $grado;
        }

        public function imprimirDatos(){
            echo "<b>Datos Estudiantiles:</b> $this->nombre $this->edad $this->grado";
        }
    }
    
    //Instanciando la clase
    // isset(): comprueba si los inputs están vacíos o no
    if (isset($_POST["nombre"], $_POST["edad"], $_POST["grado"])) {
        $estudiante = new Alumno($_POST["nombre"], $_POST["edad"], $_POST["grado"]);
        $estudiante->imprimirDatos();
    }
    
?>
</html>