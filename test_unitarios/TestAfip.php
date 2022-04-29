<?php

use PHPUnit\Framework\TestCase;

require_once 'Afip.php';

class TestAfip extends TestCase{ 


	public function testEsperandoPrimerMontoAPagar(){
		$categoria = "A";
		$afip = new Afip;

		$resultado = $afip->calcularMontoAPagar($categoria);

		$this->assertEquals(1950, $resultado);
	}

	public function testEsperandoSegundoMontoAPagar(){
		$categoria = "B";
		$afip = new Afip;

		$resultado = $afip->calcularMontoAPagar($categoria);

		$this->assertEquals(2850, $resultado);
	}

		public function testEsperandoTercerMontoAPagar(){
		$categoria = "C";
		$afip = new Afip;

		$resultado = $afip->calcularMontoAPagar($categoria);

		$this->assertEquals(3500, $resultado);
	}
	public function testCategoriaVacia(){
		$categoria = "";
		$afip = new Afip;

		$resultado = $afip->calcularMontoAPagar($categoria);

		$this->assertFalse($resultado);
	}



	
}

?>