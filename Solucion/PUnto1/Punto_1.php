<!DOCTYPE html>
<html>

<head>
    <title>Formulario de vehículo</title>
    <!-- Agregamos los estilos de Bootstrap -->

</head>

<body>
    <div>
        <h1>Formulario de vehículo</h1>
        <form method="post" action="vehiculo.php">
            <div class="form-group">
                <label for="marca">Marca:</label>
                <input type="text" id="marca" name="marca" " required>
            </div>

            <div class=" form-group">
                <label for="modelo">Modelo:</label>
                <input type="text" id="modelo" name="modelo" " required>
            </div>

            <div>
                <label for=" anio">Año:</label>
                <input type="number" id="anio" name="anio" " required>
            </div>

            <button type=" submit">Enviar</button>
        </form>
    </div>


</body>

</html>