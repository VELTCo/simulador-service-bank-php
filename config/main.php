<?php



function main($conexion){
if(isset($_GET['pagina'])){
	$pagina = $_GET['pagina'];
}else{
	$pagina = 1;
}

if(isset($_GET['tarjeta'])){
	$tarjeta = $_GET['tarjeta'];
}else{
	$tarjeta = 0;
}

switch ($pagina) {
	case 1:
		index();
		break;
	case 2:
		mostrarTodo($conexion);
		break;
	case 3:
		buscar($conexion, $tarjeta);
		break;	
	default:
		index();
		break;
}


}

?>