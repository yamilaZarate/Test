<?php


/*
 * Si categoria == A, el monto a pagar es de $1950
 * Si categoria == B, el monto a pagar es de $2850
 * Si categoria == C, el monto a pagar es de $3500
 *
 * La funcion recibe un parametro: categoria
 * Debe retornar el monto final a pagar.
 * 
 * La Categoria no debe estar vacía
 * La Categoria deber ser A, B o C, sino error
 * 
 * Si hace falta, agregar validaciones a la función
 * Crear al menos 4 tests
 */

class Afip
{
	public function calcularMontoAPagar($categoria) {
		$montoAPagar = 0;
		if ($categoria == ""){
			return false;
		}
		if ($categoria == "A") {
			$montoAPagar = 1950;
		} else if ($categoria == "B") {
			$montoAPagar = 2850;
		} else if ($categoria == "C") {
			$montoAPagar = 3500;
		}
		return $montoAPagar;
	}
}

$afip = new Afip;
$montoFinal = $afip->calcularMontoAPagar("A");
echo $montoFinal;

?>
