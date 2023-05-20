<!DOCTYPE html>
<html>
  <head>
    <title>Fórmula cuadrática</title>
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    />
  </head>
  <body>
    <div class="container">
      <h1>Fórmula cuadrática</h1>
      <form method="post">
        <div class="form-group">
          <label for="a">Ingrese el valor de a:</label>
          <input type="number" class="form-control" id="a" name="a" required />
        </div>
        <div class="form-group">
          <label for="b">Ingrese el valor de b:</label>
          <input type="number" class="form-control" id="b" name="b" required />
        </div>
        <div class="form-group">
          <label for="c">Ingrese el valor de c:</label>
          <input type="number" class="form-control" id="c" name="c" required />
        </div>
        <button type="submit" class="btn btn-primary">Calcular</button>
      </form>

      <?php
    if (isset($_POST['a']) && isset($_POST['b']) && isset($_POST['c'])) {
      $a = $_POST['a'];
      $b = $_POST['b'];
      $c = $_POST['c'];

      $discriminante = pow($b, 2) - 4 * $a * $c;

      if ($discriminante >= 0) { $x1 = (-$b + sqrt($discriminante)) / (2 * $a);
      $x2 = (-$b - sqrt($discriminante)) / (2 * $a); echo "
      <h2>Resultados:</h2>
      "; echo "
      <p>x1 = $x1</p>
      "; echo "
      <p>x2 = $x2</p>
      "; } else { echo "
      <p>La ecuación no tiene soluciones reales.</p>
      "; } } ?>
    </div>
  </body>
</html>
