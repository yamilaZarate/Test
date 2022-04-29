<?php

use PHPUnit\Framework\TestCase;

require_once 'TarjetaCredito.php';

class TestTarjetaCredito extends TestCase{ 

	public function testobtenerCantidadCuotasTarjetaVisa(){
		$tarjeta = "VISA";
		$tarjetaCredito = new TarjetaCredito;

		$resultado = $tarjetaCredito->obtenerCantidadCuotasSinInteres($tarjeta);

		$this->assertEquals(12, $resultado);
	}
	public function testobtenerCantidadCuotasTarjetaNaranja(){
		$tarjeta = "NARANJA";
		$tarjetaCredito = new TarjetaCredito;

		$resultado = $tarjetaCredito->obtenerCantidadCuotasSinInteres($tarjeta);

		$this->assertEquals(6, $resultado);
	}
	public function testobtenerCantidadCuotasTarjetaMasterCard(){
		$tarjeta = "MASTERCARD";
		$tarjetaCredito = new TarjetaCredito;

		$resultado = $tarjetaCredito->obtenerCantidadCuotasSinInteres($tarjeta);

		$this->assertEquals(3, $resultado);
	}
	public function testobtenerCantidadCuotasOtraTarjeta(){
		$tarjeta = "NARANJA X";
		$tarjetaCredito = new TarjetaCredito;

		$resultado = $tarjetaCredito->obtenerCantidadCuotasSinInteres($tarjeta);

		$this->assertEquals(0, $resultado);
	}
	public function testTarjetaVacia(){
		$tarjeta = "";
		$tarjetaCredito = new TarjetaCredito;

		$resultado = $tarjetaCredito->obtenerCantidadCuotasSinInteres($tarjeta);

		$this->assertFalse($resultado);
	}
}
?>