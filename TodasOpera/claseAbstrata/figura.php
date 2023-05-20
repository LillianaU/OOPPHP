<?php
// Clase abstracta Figura
abstract class Figura {
protected $color;

public function __construct($color) {
$this->color = $color;
}

// Método abstracto para calcular el área de la figura
abstract public function calcularArea();
}

// Clase Rectangulo que hereda de Figura
class Rectangulo extends Figura {
protected $lado1;
protected $lado2;

public function __construct($color, $lado1, $lado2) {
parent::__construct($color);
$this->lado1 = $lado1;
$this->lado2 = $lado2;
}

// Implementación del método abstracto para calcular el área del rectángulo
public function calcularArea() {
return $this->lado1 * $this->lado2;
}
}

// Crear objeto Rectangulo y calcular su área
$rectangulo = new Rectangulo("rojo", 5, 10);
echo "El área del rectángulo es: ".$rectangulo->calcularArea();
?>