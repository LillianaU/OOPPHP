<?php
		class Vehiculo
		{
			public $marca;
			public $modelo;
			public $anio;

			public function obtener_info()
			{
				echo "<div>";
				echo "<h1 class='mb-4'>Información de vehículo</h1>";
				echo "<p class='lead'>Marca: " . $this->marca . "</p>";
				echo "<p class='lead'>Modelo: " . $this->modelo . "</p>";
				echo "<p class='lead'>Año: " . $this->anio . "</p>";
				echo "</div>";
			}
		}

		if (isset($_POST["marca"]) && isset($_POST["modelo"]) && isset($_POST["anio"])) {
			$mi_auto = new Vehiculo();
			$mi_auto->marca = $_POST["marca"];
			$mi_auto->modelo = $_POST["modelo"];
			$mi_auto->anio = $_POST["anio"];

			$mi_auto->obtener_info();
		} else {
			echo "<h1>Error: Faltan datos del vehículo</h1>";
		}
