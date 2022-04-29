<?php
/*
 * La funcion debe devolver la cantidad de cuotas sin interes de acuerdo
 * a la tarjeta 
 *
 * Si la tarjeta de credito es VISA, 12 cuotas
 * Si la tarjeta de credito es NARANJA, 6 cuotas
 * Si la tarjeta de credito es MASTERCARD, 3 cuotas
 *
 * Cualuier otra trajeta no tiene beneficio, 0 cuotas 
 *
 *
 * AGREGAR VALIDACIONES:
 * La tarjeta no puede estar vacia
 */

class TarjetaCredito
{
	public function obtenerCantidadCuotasSinInteres($tarjeta) {
		$cuotasSinInteres = 0;
		if ($tarjeta == "") {
			return false;
		}

		if ($tarjeta == "VISA") {
			$cuotasSinInteres = 12;
		} else if ($tarjeta == "NARANJA") {
			$cuotasSinInteres = 6;
		} else if ($tarjeta == "MASTERCARD") {
			$cuotasSinInteres = 3;
		}

		return $cuotasSinInteres;
	}
}

$tarjetaCredito = new TarjetaCredito;
$cantidadCuota = $tarjetaCredito->obtenerCantidadCuotasSinInteres("");
echo $cantidadCuota;

?>

