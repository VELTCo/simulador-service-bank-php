<!DOCTYPE html>
<html>
<head>
	<title>Consulta Externa</title>
</head>
<body>
<h1>Consulta desde Sitio Web Externo</h1>
<p>Se Hace la consulta a X Tarjeta:</p>

<?php


$tarjeta= "1234567";
$source = file_get_contents("http://localhost:8888/service/index.php?pagina=3&tarjeta=$tarjeta"); 
$json = $source;
 
// se convierte en un objeto Json 
$obj = json_decode($json);


echo "Propietario: " .$obj->{'propietario'} ."<br>";
echo "Tarjeta N: " .$obj->{'numero'} ."<br>";
echo "Saldo: $" .$obj->{'saldo'} ."<br>";
echo "Tipo: " .$obj->{'tipo'} ."<br>";





?>


</body>
</html>