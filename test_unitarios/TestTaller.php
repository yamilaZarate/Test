<?php

use PHPUnit\Framework\TestCase;

require_once 'Taller.php';

class TestTaller extends TestCase{ 

	public function testEsperandoDescuentoDeCincoPorciento(){
		$marca = "Mondial";
		$monto= 1000;
		$taller = new Taller;

		$resultado = $taller->calcularMontoFinal($marca, $monto);

		$this->assertEquals(950, $resultado);
	}
	public function testEsperandoDescuentoDelVeintePorciento(){
		$marca = "Honda";
		$monto= 1000;
		$taller = new Taller;

		$resultado = $taller->calcularMontoFinal($marca, $monto);

		$this->assertEquals(800, $resultado);
	}
	public function testEsperandoDescuentoDelQuincePorciento(){
		$marca = "Yamaha";
		$monto= 1000;
		$taller = new Taller;

		$resultado = $taller->calcularMontoFinal($marca, $monto);

		$this->assertEquals(850, $resultado);
	}
	public function testEsperandoDescuentoDelDiezPorciento(){
		$marca = "Zanella";
		$monto= 1000;
		$taller = new Taller;

		$resultado = $taller->calcularMontoFinal($marca, $monto);

		$this->assertEquals(900, $resultado);
	}
	public function testEsperandoMarcaVacia(){
		$marca = "";
		$monto= 1000;
		$taller = new Taller;

		$resultado = $taller->calcularMontoFinal($marca, $monto);

		$this->assertFalse($resultado);
	}
	public function testEsperandoMontoVacio(){
		$marca = "Honda";
		$monto= 0;
		$taller = new Taller;

		$resultado = $taller->calcularMontoFinal($marca, $monto);

		$this->assertFalse($resultado);
	}


}
?>