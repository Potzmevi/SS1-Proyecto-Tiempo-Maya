<?php
$formato = mktime(0, 0, 0, 1, 1, 1720) / (24 * 60 * 60);
$fecha = date("U", strtotime($fecha_consultar)) / (24 * 60 * 60);
$id = $fecha - $formato;
$nahual = $id % 20;
if ($nahual < 0) {
	$nahual = 19 + $nahual;
}
$Query = $conn->query("SELECT nombre,ruta_web FROM nahual WHERE idweb=".$nahual." ;");
$row = mysqli_fetch_assoc($Query);
$nombre = $row['nombre'];
$ruta = $row['ruta_web'];

$arrayNahual = array(
	"nombre" => $nombre,
	"path" => $ruta
);

return $arrayNahual;



?>
