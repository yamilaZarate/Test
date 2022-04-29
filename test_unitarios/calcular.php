<?php

/*
*Que reciba como parametro dos numeros: numero1, numero2

*Ambos numeros debes ser mayores a 0

*Si el numero1 es menor o igual al numero2, entonces se debe retornar numero1/numero2(division). con 2 decimales

* si el numero1 es mayor a numero2, entonces retornar numero1 x numero2(multiplicacion). con 2 decimales

*/


class Calculo
{
	function calcular($numero1, $numero2) {

		if ($numero1 < 1 || $numero2 < 1) {
			return false;
		}

		if ($numero1 <= $numero2) {
			$resultado = $numero1 / $numero2;
		} else {
			$resultado = $numero1 * $numero2;
		}

		$resultado = number_format($resultado, 3);
		return $resultado;
	}
}

$calculo = new Calculo;
$resultado = $calculo->calcular(5,3);
echo $resultado;



/*
$resultado = calcular(5,3);
echo $resultado;
*/
?>