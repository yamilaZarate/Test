<?php


/*
 * Si nota == 10 la calificación es SOBRESALIENTE
 * Si nota >= 8 la calificación es Muy Satisfactorio
 * Si nota >= 6 la calificación es Satisfactorio
 * Si nota < 6 la calificación es Reprobado
 *
 * Sin nota > 10 o negativo, debe retornar el mensaje NOTA NO VALIDA
 */



class Calificacion
{
	public function obtenerCalificacionPorNota($nota) {
		$calificacion = "";
		if ($nota > 10 || $nota < 0) {
			$calificacion = "NOTA NO VALIDA";
		} else if ($nota == 10) {
			$calificacion = "SOBRESALIENTE";
		} else if ($nota >= 8) {
			$calificacion = "Muy Satisfactorio";
		} else if ($nota >= 6) {
			$calificacion = "Satisfactorio";
		} else {
			$calificacion = "Reprobado";
		}
		return $calificacion;
	}
}
$calificacion = new Calificacion;
$notaFinal = $calificacion->obtenerCalificacionPorNota("");
echo $notaFinal;

?>