<?php

use PHPUnit\Framework\TestCase;

require_once 'MacedoMartinez.php';

class TestMacedoMartinez extends TestCase{ 

	public function testcalcularMontoMatricularSoftwareDescuento(){
		$carrera = "Software";
		$mes = "diciembre";
		$macedoMartinez = new MacedoMartinez;

		$resultado = $macedoMartinez->calcularMontoMatricula($carrera,$mes);

		$this->assertEquals(3400.0, $resultado);
	}
	public function testcalcularMontoMatricularLiteraturaDescuento(){
		$carrera = "Literatura";
		$mes = "diciembre";
		$macedoMartinez = new MacedoMartinez;

		$resultado = $macedoMartinez->calcularMontoMatricula($carrera,$mes);

		$this->assertEquals(3230, $resultado);
	}
	public function testcalcularMontoMatricularRedesturaDescuento(){
		$carrera = "Redes";
		$mes = "diciembre";
		$macedoMartinez = new MacedoMartinez;

		$resultado = $macedoMartinez->calcularMontoMatricula($carrera,$mes);

		$this->assertEquals(3357.5, $resultado);
	}


	
}
?>
