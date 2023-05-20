<!DOCTYPE html>
<html>

<head>
    <title>Ejemplo de Clases de Composición</title>
</head>

<body>
    <h1>Ejemplo de Clases de Composición</h1>
    <?php
		include 'clase.php';

		// Crear una empresa
		$empresa = new Empresa("Mi Empresa");

		// Agregar empleados a la empresa
		$empleado1 = new Empleado("Juan", "Pérez", "Desarrollador");
		$empleado2 = new Empleado("María", "García", "Diseñadora");
		$empresa->agregarEmpleado($empleado1);
		$empresa->agregarEmpleado($empleado2);

		// Mostrar la información de la empresa y sus empleados
		echo "<h2>" . $empresa->getNombre() . "</h2>";
		echo "<ul>";
		foreach ($empresa->getEmpleados() as $empleado) {
			echo "<li>" . $empleado->getNombreCompleto() . " - " . $empleado->getPuesto() . "</li>";
		}
		echo "</ul>";
	?>
</body>

</html>