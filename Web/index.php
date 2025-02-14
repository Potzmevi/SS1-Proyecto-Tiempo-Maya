<?php 
$conn = include "conexion/conexion.php";

if(isset($_GET['fecha'])){
$fecha_consultar = $_GET['fecha'];
}else{
date_default_timezone_set('US/Central');  
$fecha_consultar = date("Y-m-d");
}

$nahual = include 'backend/buscar/conseguir_nahual_nombre.php';
$energia = include 'backend/buscar/conseguir_energia_numero.php';
$haab = include 'backend/buscar/conseguir_uinal_nombre.php';
$cuenta_larga = include 'backend/buscar/conseguir_fecha_cuenta_larga.php';
$cholquij = $nahual["nombre"]." ". strval($energia);
$pathNahual =  $nahual["path"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Tiempo Maya</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <?php include "blocks/bloquesCss.html" ?>
  <link rel="stylesheet" href="css/estilo.css?v=<?php echo(rand()); ?>" />
  <link rel="stylesheet" href="css/estiloAdmin.css?v=<?php echo(rand()); ?>" />

    <link rel="stylesheet" href="css/index.css?v=<?php echo (rand()); ?>" />


</head>

<body>

<?php include "NavBar.php" ?>
 <div>
 <section id="inicio">
    <div id="inicioContainer" class="inicio-container">
      <h1><br><br>Bienvenido al Tiempo Maya</h1>
        <div id='box' style="padding: 15px; ">
      <div id='formulario' >
      <h5 style="color: #52BE80;">Calendario Haab : <?php echo isset($haab) ? $haab["nombre"] : ''; ?></h5>
      <h5 style="color: #52BE80;">Calendario Cholquij : <?php echo isset($cholquij) ? $cholquij : ''; ?></h5>
      <h5 style="color: #52BE80;">Cuenta Larga : <?php echo isset($cuenta_larga) ? $cuenta_larga : ''; ?></h5>

</div>
        <div id='imagenes' >
            <img style="width: 150px; height: 150px;" src="<?php echo $haab["path"] ?>" alt="<?php echo $haab["path"] ?>" class="img-haab">
            <img style="width: 150px; height: 150px;" src="<?php echo $pathNahual; ?>" alt="<?php echo $pathNahual; ?>" class="img-nahual">
            <img style="width: 150px; height: 150px;" src="imgs/Cuenta%20larga/CuentaLarga.png" alt="<?php echo $pathNahual; ?>" class="img-cuentalarga">
        </div>
            <h5 style="color: whitesmoke;"><?php echo isset($fecha_consultar) ? $fecha_consultar : ''; ?></h5>
        </div>
    </div>
  </section>
 </div>
 
  
  <?php include "blocks/bloquesJs1.html" ?>

</body>
</html>
