<?php

use PHPUnit\Framework\TestCase;

require_once 'Calificacion.php';

class TestCalificacion extends TestCase{ 


	public function testObtenerPrimerCalificacion(){
		$nota = 10;
		$calificacion = new Calificacion;

		$resultado = $calificacion->obtenerCalificacionPorNota($nota);

		$this->assertEquals("SOBRESALIENTE", $resultado);
	}

	public function testObtenerSegundaCalificacion(){
		$nota = 8;
		$calificacion = new Calificacion;

		$resultado = $calificacion->obtenerCalificacionPorNota($nota);

		$this->assertEquals("Muy Satisfactorio", $resultado);
	}
	public function testObtenerTerceraCalificacion(){
		$nota = 6;
		$calificacion = new Calificacion;

		$resultado = $calificacion->obtenerCalificacionPorNota($nota);

		$this->assertEquals("Satisfactorio", $resultado);
	}
	public function testObtenerCuartaCalificacion(){
		$nota = 5;
		$calificacion = new Calificacion;

		$resultado = $calificacion->obtenerCalificacionPorNota($nota);

		$this->assertEquals("Reprobado", $resultado);
	}
	public function testobtenerCalificacionNegativa() {
    	$nota = -10;
    	$calificacion = new Calificacion;

		$resultado = $calificacion->obtenerCalificacionPorNota($nota);
		
		$this->assertEquals("NOTA NO VALIDA", $resultado);
	}

	public function testobtenerNotaMayorA10() {
    	$nota = 11;
    	$calificacion = new Calificacion;

		$resultado = $calificacion->obtenerCalificacionPorNota($nota);

		$this->assertEquals("NOTA NO VALIDA", $resultado);	
	}
}
?>