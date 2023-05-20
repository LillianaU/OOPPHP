<!DOCTYPE html>
<html>

<head>
    <title>Calculadora de suma</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>

    <div class="container">
        <h1>Calculadora de suma</h1>
        <form method="post">
            <div class="form-group">
                <label for="num1">Ingrese el primer número:</label>
                <input type="number" class="form-control" id="num1" name="num1" required>
            </div>
            <div class="form-group">
                <label for="num2">Ingrese el segundo número:</label>
                <input type="number" class="form-control" id="num2" name="num2" required>
            </div>
            <button type="submit" class="btn btn-primary">Calcular suma</button>
        </form>

        <?php
    if (isset($_POST['num1']) && isset($_POST['num2'])) {
      $num1 = $_POST['num1'];
      $num2 = $_POST['num2'];

      require_once 'suma.php';
      $suma = new Suma($num1, $num2);
      $resultado = $suma->calcular();

      echo "<div class='alert alert-success' role='alert'>";
      echo "La suma de $num1 y $num2 es $resultado";
      echo "</div>";
    }
    ?>

    </div>

</body>

</html>