<?php

/*
*crear una funcion que reciba un nombre de archivo y una extension como parametro.

*el nombre de archivo no debe estar en blanco

*la extension debe ser "jpg", "png" o "gif". sino error

* la funcion debe retornar el nombre de archivo con su extension concatenados todo en minusculas
*/
function generarNombreArchivo($nombreArchivo, $extension) {

	if (empty($nombreArchivo) || empty($extension)) {
		return false;
	}

	if ($extension != 'gif' && $extension != 'png' && $extension != 'jpg') {
		return false;
	}

	$nombreArchivoFinal = $nombreArchivo . "." . $extension;
	$nombreArchivoFinal = strtolower($nombreArchivoFinal);
	return $nombreArchivoFinal;

}
/*
$nombre= "test";
$extension = "gif";

$nombreArchivo = generarNombreArchivo($nombre,$extension);

echo $nombreArchivo;
*/
?>