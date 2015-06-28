<?php




// consultas a la BD principales
function verRegistros($conexion){
	$registros=mysqli_query($conexion,"select *
                        from tarjetas") or
  die("Problemas en el select:".mysqli_error($conexion));
   return $registros;
}


function buscarTarjeta($conexion, $tarjeta){
	$registros=mysqli_query($conexion,"select *
                        from tarjetas where numero = $tarjeta") or
  die("Problemas en el select:".mysqli_error($conexion));
   return $registros;
}


?>