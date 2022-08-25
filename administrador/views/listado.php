<?php 
	require_once "header.php";
?>

<h1 class='tituloListado'>Lista Registros</h1>
<?php
include("../controller/listado_controller.php");
$control = new Registros_controller();
$control->ListRegistros();
?>

<?php require_once "./footer.php"; ?>
<?php require_once "./footer.php"; ?>