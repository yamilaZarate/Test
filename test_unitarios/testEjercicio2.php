<?php

// PHPUnit

use PHPUnit\Framework\TestCase;

require_once "ejercicio2.php";


class TestEjercicio2 extends TestCase {

	public function testCalcularConNumeroCero() {

		// Arrange: crear el contexto
		$numero1 = 0;
		$numero2 = 5;

		// Act: ejecutar la funcion
		$resultado = calcular($numero1, $numero2);

		// Assert: afirmar algo
		$this->assertFalse($resultado);

	}

	public function testCalcularEsperandoDivision() {

		// Arrange: crear el contexto
		$numero1 = 5;
		$numero2 = 11;

		// Act: ejecutar la funcion
		$resultado = calcular($numero1, $numero2);

		// Assert: afirmar algo
		$this->assertEquals(0.455, $resultado);

	}

	public function testCalcularEsperandoMultiplicacion() {

		// Arrange: crear el contexto
		$numero1 = 5.89;
		$numero2 = 4.3333;

		// Act: ejecutar la funcion
		$resultado = calcular($numero1, $numero2);

		// Assert: afirmar algo
		$this->assertEquals(25.523, $resultado);

	}

}




?>