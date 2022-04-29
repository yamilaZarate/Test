<?php

use PHPUnit\Framework\TestCase;

require_once 'porcentaje.php';

class TestPorcentaje extends TestCase{ 


	public function testEsperandoDescuentoMayorA2000(){
		$monto = 2500;
		$calculo = new Calculo;

		$descuento = $calculo->calcularDescuento($monto);
		$this->assertEquals(375, $descuento);
	}
	public function testEsperandoDescuentoMayorA1000(){
		$monto = 1500;
		$calculo = new Calculo;

		$descuento = $calculo->calcularDescuento($monto);
		$this->assertEquals(75.0, $descuento);
	}
	public function testEsperandoDescuentoMenorA1000(){
		$monto = 900;
		$calculo = new Calculo;

		$descuento = $calculo->calcularDescuento($monto);
		$this->assertEquals(0, $descuento);
	}
	public function testEsperandoDescuentoNegativo(){
		$monto = -400;
		$calculo = new Calculo;

		$descuento = $calculo->calcularDescuento($monto);
		$this->assertEquals(0, $descuento);
	}
	



}

?>