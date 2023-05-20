<?php
// Incluimos la clase Programador
require_once 'Programador.php';

// Creamos un objeto Programador con la información del formulario
$programador = new Programador();
$programador->nombre = $_POST['nombre'];
$programador->apellido = $_POST['apellido'];
$programador->salario = $_POST['salario'];
$programador->lenguaje = $_POST['lenguaje'];

// Calculamos el salario neto del programador
$salario_neto = $programador->calcular_salario_neto();

// Mostramos el salario neto del programador en una página web
echo "<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
	<div>
		<h1>Salario neto del programador</h1>
		<p>Nombre: " . $programador->nombre . "</p>
		<p>Apellido: " . $programador->apellido . "</p>
		<p>Lenguaje: " . $programador->lenguaje . "</p>
		<p>Salario neto: $" . $salario_neto . "</p>
	</div>

	
</body>
</html>";
