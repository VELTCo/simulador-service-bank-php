<?php
// Devuelve un Objeto en formato JSON para que sea interpretado por otras aplicacicones

while ($reg=mysqli_fetch_array($registros)){
	  echo '{ "saldo": "'.$reg['saldo'].'",';
	  echo ' "tipo": "'.$reg['tipo'].'",';
	  echo ' "numero": "'.$reg['numero'].'",';
	  echo ' "propietario":"'.$reg['cedula'].'"}';
}

?>

