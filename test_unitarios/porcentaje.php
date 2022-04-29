<?php 
// crear una clase que calcule el descuento a partir de un monto
// si monto > 2000, descuento es de 15%
// si monto > 1000, descuento es del 5%
class Calculo {

	public function calcularDescuento($monto) {

		$descuento = 0;
		if ($monto > 2000) {
			$descuento = $monto * 0.15;
		} else if ($monto > 1000) {
			$descuento = $monto * 0.05;
		}

		return $descuento;

    }
}

$calculo = new Calculo;
$descuento = $calculo->calcularDescuento(5000);
echo $descuento;

?>