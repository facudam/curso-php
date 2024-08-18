<?php 
class Jugador {
    // Propiedades de la clase
    public $nombre;
    public $posicion;
    public $numero;

    // Constructor
    public function __construct($nombre, $posicion, $numero) 
    {
        $this->nombre = $nombre;
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

$jugador1 = new Jugador("Facundo", "Delantero", 10);

echo '<pre>';
var_dump($jugador1);
echo '</pre>';
?>

<h1><?= $jugador1->nombre ?></h1>
<h1><?= $jugador1->entrenar() ?></h1>
<h1><?= $jugador1->jugar() ?></h1>
