<?php
// Clase Cuenta
class Cuenta {
    public $nombre;
    
    function __construct($nombre) {
        $this->nombre = $nombre;
    }
}

// Clase Usuario
class Usuario {
    public $nombre;
    public $cuentas = array();
    
    function __construct($nombre) {
        $this->nombre = $nombre;
    }
    
    function agregarCuenta($nombre) {
        $cuenta = new Cuenta($nombre);
        array_push($this->cuentas, $cuenta);
    }
    
    function mostrarDiagramaClases() {
        echo "Usuario: ".$this->nombre."<br>";
        echo "Cuentas:<br>";
        foreach ($this->cuentas as $cuenta) {
            echo "- ".$cuenta->nombre."<br>";
        }
    }
}

// Crear usuario
$usuario = new Usuario("");

// Agregar cuenta si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre_usuario = $_POST["usuario"];
    $nombre_cuenta = $_POST["cuenta"];
    
    // Crear nuevo usuario si es necesario
    if ($usuario->nombre != $nombre_usuario) {
        $usuario = new Usuario($nombre_usuario);
    }
    
    $usuario->agregarCuenta($nombre_cuenta);
}

// Mostrar diagrama de clases
$usuario->mostrarDiagramaClases();
?>