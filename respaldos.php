
<?php


$tarjeta= "22224";
$source = file_get_contents("http://localhost:8888/service/otro.php?tarjeta=$tarjeta"); 
$json = $source;

$obj = json_decode($json);
print $obj->{'nombre'}; // 12345


if($obj->{'saldo'}  == 2){
	echo "lol";
}

?>


<?php
// resultados del servicio

if ($_GET['tarjeta']){
	$tarjeta = $_GET['tarjeta'];

	// simulamos un ejemplo, esto debe venir desde la BD
	if ($tarjeta == "22224"){
		echo '
		{"saldo": "4000", "nombre": "Luis Salas", "tipo": "visa"}';
	};
};

?>

<?php
 
 // AQUI SE CONSULTA AL SERVICIO

$tarjeta= "22224";
$source = file_get_contents("http://localhost:8888/service/otro.php?tarjeta=$tarjeta");
 
/*if ( preg_match('|<div class="saldo">(.*?)</div>|is',$source,$cap))
{
	print_r ($cap);
}
*/


if ( preg_match('|<div class="saldo">(.*?)</div>|is',$source,$cap))
{
	if ($cap[1] < 6000){
		echo "el producto cuesta 6000 y su saldo actual es $cap[1]";
	}
}