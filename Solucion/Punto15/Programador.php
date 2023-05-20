<?php
class Empleado {
	public $nombre;
	public $apellido;
	public $salario;

	public function calcular_salario_neto() {
		// Cálculo del salario neto del empleado
		// ...
	}
}
class Programador extends Empleado {
	public $lenguaje;

	public function calcular_salario_neto() {
		// Cálculo del salario neto del programador
		// Incluimos el bono adicional por ser experto en un lenguaje en particular
		$salario_neto = $this->salario - ($this->salario * 0.1) + 1000;
		return $salario_neto;
	}
}