<?php

use PHPUnit\Framework\TestCase;

require_once 'Planilla.php';

class TestPlanilla extends TestCase{ 


	public function testObtenerPrimerEstado(){
		$porcentajeAsistencia = 80;
		$planilla = new Planilla;

		$resultado = $planilla->obtenerEstadoPorAsistencia($porcentajeAsistencia);

		$this->assertEquals("Regular", $resultado);
	}
	
	public function testObtenerSegundoEstado(){
		$porcentajeAsistencia = 45;
		$planilla = new Planilla;

		$resultado = $planilla->obtenerEstadoPorAsistencia($porcentajeAsistencia);

		$this->assertEquals("Condicional", $resultado);
	}

	public function testObtenerTercerEstado(){
		$porcentajeAsistencia = 35;
		$planilla = new Planilla;

		$resultado = $planilla->obtenerEstadoPorAsistencia($porcentajeAsistencia);

		$this->assertEquals("Libre", $resultado);
	}

	public function testobtenerEstadoPorAsistenciaNegativa() {
    	$porcentajeAsistencia = -10;
    	$planilla = new Planilla;

		$resultado = $planilla->obtenerEstadoPorAsistencia($porcentajeAsistencia);
		
		$this->assertEquals("Porcentaje no valido", $resultado);
	}

	public function testobtenerEstadoPorAsistenciaMayorA100() {
    	$porcentajeAsistencia = 101;
    	$planilla = new Planilla;

		$resultado = $planilla->obtenerEstadoPorAsistencia($porcentajeAsistencia);

		$this->assertEquals("Porcentaje no valido", $resultado);	
	}
}

?>