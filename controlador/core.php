<?php
// core del servicio



function mostrarTodo($conexion){

	$registros = verRegistros($conexion);
	include 'vista/formato.php';
}


function buscar($conexion, $tarjeta){
	$registros = buscarTarjeta($conexion, $tarjeta);
	include 'vista/formato.php';

}

function index(){
	$mensaje = "Actualmente, no cuenta con permisos para ingresar a este servicio Web, solicitalo en la sede de Bank más cercano";
	include 'vista/mensaje.php';
}


?>