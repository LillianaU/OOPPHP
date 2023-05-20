<?php
// Clase Vehiculo
class Vehiculo {
    public $color;
    public $matricula;
    public $modelo;
    
    function __construct($color, $matricula, $modelo) {
        $this->color = $color;
        $this->matricula = $matricula;
        $this->modelo = $modelo;
    }
    
    public function acelerar() {
        echo "Acelerando vehículo...";
    }
}

// Clase Automovil
class Automovil extends Vehiculo {
    public function acelerar() {
        echo "Acelerando automóvil con pedal...";
    }
}

// Clase Moto
class Moto extends Vehiculo {
    public function acelerar() {
        echo "Acelerando moto con manubrio...";
    }
}

// Crear vehículo según el tipo enviado por el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tipo_vehiculo = $_POST["tipo"];
    $color = $_POST["color"];
    $matricula = $_POST["matricula"];
    $modelo = $_POST["modelo"];
    
    if ($tipo_vehiculo == "automovil") {
        $vehiculo = new Automovil($color, $matricula, $modelo);
    } elseif ($tipo_vehiculo == "moto") {
        $vehiculo = new Moto($color, $matricula, $modelo);
    }
    
    // Acelerar vehículo
    $vehiculo->acelerar();
}
?>