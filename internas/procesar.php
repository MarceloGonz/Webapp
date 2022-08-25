<?php
extract($_POST);
include("../dll/config.php");
include("../dll/class_mysqli.php");

$clave=md5($clave);

$miconexion = new clase_mysqli;
$miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
$sql="insert into usuarios values ('','$nombres','$apellidos','$correo','$clave')";
$resSql=$miconexion->consulta($sql);
if (!$resSql) {
	echo '<script>alert("SQL Incorrectos...");</script>';
	echo "<script>location.href='../registro.php'</script>";
}else{
	echo '<script>alert("SQL correctos :)...");</script>';
	echo "<script>location.href='../login.php'</script>";
}
?>