<?php 
// Clase abstracta Animal
abstract class Animal {
    protected $nombre;
    
    public function __construct($nombre) {
        $this->nombre = $nombre;
    }
    
    // Método abstracto hablar()
    abstract public function hablar();
}

// Clase Perro que hereda de Animal
class Perro extends Animal {
    public function hablar() {
        return "Guau guau";
    }
}

// Clase Gato que hereda de Animal
class Gato extends Animal {
    public function hablar() {
        return "Miau miau";
    }
}

// Crear objetos de la clase Perro y Gato y llamar al método hablar()
$perro = new Perro("Fido");
echo $perro->hablar(); // Muestra "Guau guau"

$gato = new Gato("Garfield");
echo $gato->hablar(); // Muestra "Miau miau"
?>