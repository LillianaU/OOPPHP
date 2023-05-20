<?php
	// Definir la clase Empleado
	class Empleado {
		private $nombre;
		private $apellido;
		private $puesto;

		public function __construct($nombre, $apellido, $puesto) {
			$this->nombre = $nombre;
			$this->apellido = $apellido;
			$this->puesto = $puesto;
		}

		public function getNombreCompleto() {
			return $this->nombre . " " . $this->apellido;
		}

		public function getPuesto() {
			return $this->puesto;
		}
	}

	// Definir la clase Empresa, que compone empleados
	class Empresa {
		private $nombre;
		private $empleados;

		public function __construct($nombre) {
			$this->nombre = $nombre;
			$this->empleados = [];
		}

		public function getNombre() {
			return $this->nombre;
		}

		public function agregarEmpleado($empleado) {
			$this->empleados[] = $empleado;
		}

		public function getEmpleados() {
			return $this->empleados;
		}
	}
/*
El código que has proporcionado parece estar bien, solo debes asegurarte de incluir el archivo clase.php y que se encuentre en la misma ubicación que el archivo index.html.

En caso de que el archivo clase.php no se encuentre en la misma ubicación que el archivo index.html, debes especificar la ruta correcta donde se encuentra el archivo clase.php dentro del método include.

Si sigues teniendo problemas, por favor, proporciónanos más detalles sobre el error que estás recibiendo para poder ayudarte mejor.*/
?>