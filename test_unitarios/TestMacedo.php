<?php

use PHPUnit\Framework\TestCase;

require_once 'MacedoMartinez.php';

class TestMacedo extends TestCase{ 

	public function testcalcularMontoMatriculaSoftwareDescuento(){
		$carrera = "Software";
		$mes = "diciembre";
		$macedoMartinez = new MacedoMartinez;

		$resultado = $macedoMartinez->calcularMontoMatricula($carrera,$mes);

		$this->assertEquals(600,$resultado);
	}
	public function testcalcularMontoMatriculaLiteraturaDescuento(){
		$carrera = "Literatura";
		$mes = "diciembre";

		$macedoMartinez = new MacedoMartinez;

		$resultado = $macedoMartinez->calcularMontoMatricula($carrera,$mes);

		$this->assertEquals(570, $resultado);
	}
	public function testcalcularMontoMatriculaRedesDescuento(){
		$carrera = "Redes";
		$mes = "diciembre";

		$macedoMartinez = new MacedoMartinez;

		$resultado = $macedoMartinez->calcularMontoMatricula($carrera,$mes);

		$this->assertEquals(592.5, $resultado);
	}

	public function testMesVacio(){
		$carrera = "Software";
		$mes = "";

		$macedoMartinez = new MacedoMartinez;

		$resultado = $macedoMartinez->calcularMontoMatricula($carrera,$mes);

		$this->assertFalse($resultado);
	}
	public function testCarreraVacia(){
		$carrera = "";
		$mes = "abril";

		$macedoMartinez = new MacedoMartinez;

		$resultado = $macedoMartinez->calcularMontoMatricula($carrera,$mes);

		$this->assertFalse($resultado);
	}
	
}
?>
