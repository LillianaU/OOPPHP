<?php
// Clase Departamento
class Departamento {
    public $nombre;
    
    function __construct($nombre) {
        $this->nombre = $nombre;
    }
}

// Clase Empresa
class Empresa {
    public $nombre;
    public $departamentos = array();
    
    function __construct($nombre) {
        $this->nombre = $nombre;
    }
    
    function agregarDepartamento($nombre) {
        $departamento = new Departamento($nombre);
        array_push($this->departamentos, $departamento);
    }
    
    function mostrarDiagramaClases() {
        echo "Empresa: ".$this->nombre."<br>";
        echo "Departamentos:<br>";
        foreach ($this->departamentos as $departamento) {
            echo "- ".$departamento->nombre."<br>";
        }
    }
}

// Crear empresa
$empresa = new Empresa("Mi empresa");

// Agregar departamento si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre_departamento = $_POST["nombre"];
    $empresa->agregarDepartamento($nombre_departamento);
}

// Mostrar diagrama de clases
$empresa->mostrarDiagramaClases();
/*
En este ejemplo, se crea una clase Departamento y una clase Empresa. La clase Empresa tiene un atributo departamentos que es un arreglo de objetos de clase Departamento. Se implementa un método agregarDepartamento para agregar un nuevo departamento al arreglo y un método mostrarDiagramaClases para mostrar el diagrama de clases en la página.

En el archivo index.htm, se crea un formulario que permite agregar un nuevo departamento a la empresa. Cuando se envía el formulario, el archivo clase.php se encarga de agregar el nuevo departamento y mostrar el diagrama de clases actualizado.
*/
?>