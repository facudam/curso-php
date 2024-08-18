<?php

class Seleccion {

    //Public - se puede acceder desde objeto o clase
    //Protected - se puede acceder únicamente en la clase
    //Private - se puede acceder únicamente por la clase que lo contiene

    public $id;
    protected $nombre;
    public $edad;

    public function __construct($id, $nombre, $edad)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function concentrarse() {
        echo $this->nombre . " está en concentración";
    }

    public function viajar() {
        echo $this->nombre . " está viajando";
    }
}
class Jugador extends Seleccion{
    // Propiedades de la clase
    public $posicion;
    public $numero;

    // Constructor
    public function __construct($id, $nombre, $edad, $posicion, $numero) 
    {
        parent::__construct($id, $nombre, $edad); // Heredamos las propiedades del padre
        $this->posicion = $posicion;
        $this->numero = $numero; 
    }

    // Métodos de la clase
    public function entrenar() {
        echo "El jugador " . $this->nombre . "  está entrenando";
    }
    public function jugar() {
        echo "El jugador " . $this->nombre . "  está jugando al futbol";
    }
}

$nuevoJugador = new Jugador(1, "Messi", 37, "Mediocampista", 10);
?>

<h1><?= $nuevoJugador->getNombre() ?></h1> <!-- Acceso desde la clase  -->
<!-- <h1><?= $nuevoJugador->nombre ?></h1> Esto marca un error porque es protected y acá accedemos desde el objeto-->
<?php $nuevoJugador->setNombre("Maradona"); ?> <!-- Modificamos el valor de la propiedad -->
<h2><?= $nuevoJugador->getNombre() ?></h2> 