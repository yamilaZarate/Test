<?php

use PHPUnit\Framework\TestCase;

require_once 'FilaB.php';

class TestFilaB extends TestCase{ 

	public function testcalcularMontoMatricularSoftwareDescuento(){
		$carrera = "Software";
		$mes= "diciembre";
		$matricula = 4000
		$macedoMartinez = new MacedoMartinez;

		$resultado = $macedoMartinez->calcularMontoMatricula($carrera,$matricula,$mes)

		$this->assertEquals(600, $resultado);
	}
	public function testcalcularMontoMatricularLiteraturaDescuento(){
		$carrera = "Literatura";
		$mes = "diciembre"
		$matricula = 3800
		$macedoMartinez = new MacedoMartinez;

		$resultado = $macedoMartinez->calcularMontoMatricula($carrera,$matricula,$mes)

		$this->assertEquals(570, $resultado);
	}
	public function testcalcularMontoMatricularRedesDescuento(){
		$carrera = "Redes";
		$mes = "diciembre"
		$matricula = 3950
		$macedoMartinez = new MacedoMartinez;

		$resultado = $macedoMartinez->calcularMontoMatricula($carrera,$matricula,$mes)

		$this->assertEquals(592.5, $resultado);
	}
}
?>
