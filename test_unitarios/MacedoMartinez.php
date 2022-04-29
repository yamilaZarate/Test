<?php
/*
*La función debe recibir por parámetros la carrera a la que se inscribe y el mes en que se realiza la inscripción. 
*La carrera y el mes no deben estar vacíos. 
*Carrera “Software”: matrícula de $4000 
*Carrera “Literatura”: matrícula de $3800 
*Carrera “Redes”: matrícula de $3950 
*Si la inscripción es en el mes de diciembre, hay un descuento del 15% en la matrícula. 
*La función debe retornar el monto total a abonar por la matrícula. 
*/
Class MacedoMartinez
{
	public function calcularMontoMatricula($carrera, $mes) {
		$montoMatricula = 0;
		$montoDescuento = 0;
		if ($carrera == "" || $mes == ""){
			return false;
		}
		if ($carrera == "Software") {
			$montoMatricula = 4000;
		} else if ($carrera == "Literatura") {
			$montoMatricula = 3800;
		} else if ($carrera == "Redes") {
			$montoMatricula = 3950;
		} 

		if ($mes == "diciembre"){
			$montoDescuento = $montoMatricula * 0.15;
		}
		
		$montoTotal = $montoMatricula - $montoDescuento;
		return $montoTotal;
	}
}

$macedoMartinez = new MacedoMartinez;
$montoTotal = $macedoMartinez->calcularMontoMatricula("Software","diciembre");
echo $montoTotal;

?>