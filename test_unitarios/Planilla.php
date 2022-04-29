<?php


/*
 * Si el porcentaje de asistencia del alumno es >= 75
 * el alumno es Regular
 *
 * Si el porcentaje de asistencia del alumno es < 75 y >= 40
 * el alumno es Condicional
 *
 * Si el porcentaje de asistencia del alumno es < 40
 * el alumno es Libre
 *
 * Si el procentaje es mayor a 100 o negativo, retornar mensaje PORCENTAJE NO VALIDO
 */


class Planilla
{
	public function obtenerEstadoPorAsistencia($porcentajeAsistencia) {
		if ($porcentajeAsistencia > 100 || $porcentajeAsistencia < 0) {
			return "Porcentaje no valido";
		}

		$estado = "";
		if ($porcentajeAsistencia >= 75) {
			$estado = "Regular";
		} else if ($porcentajeAsistencia >= 40) {
			$estado = "Condicional";
		} else {
			$estado = "Libre";
		} 
		return $estado;
	}
}
$planilla = new Planilla;
$estadoFinal = $planilla->obtenerEstadoPorAsistencia("Regular");
echo $estadoFinal;

?>