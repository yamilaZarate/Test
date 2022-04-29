<?php

use PHPUnit\Framework\TestCase;

require_once 'calcular.php';

class testCalcular extends TestCase{ 

	public function testCalcularConNumeroCero(){
		$numero1 = 0;
		$numero2 = 10;
		$calculo = new Calculo;

		$resultado = $calculo->calcular($numero1, $numero2);

		$this->assertFalse($resultado);
	}
	public function testCalcularConDivision(){
		$numero1 = 5;
		$numero2 = 12;
		$calculo = new Calculo;

		$resultado = $calculo->calcular($numero1, $numero2);
		$this->assertEquals(0.417, $resultado);

	}
	public function testCalcularConMultiplicacion(){
		$numero1 = 5.55;
		$numero2 = 1.5;
		$calculo = new Calculo;

		$resultado = $calculo->calcular($numero1, $numero2);
		$this->assertEquals(8.325, $resultado);

	}
}

?>