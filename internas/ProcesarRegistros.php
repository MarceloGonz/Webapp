<?php
extract($_POST);
include("../dll/config.php");
include("../dll/class_mysqli.php");


$miconexion = new clase_mysqli;
$miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
if (isset($Nombre_institucion) && isset($Direccion_institucion) && isset($Telefono_institucion)&&isset($Ruc_institucion)) {
    $sql="insert into registrosnormal values ('','$Nombres','$Apellidos','$Cedula','$Correo','$Direccion','$Telefono','$Pais','$Ciudad','$Institucion','$Nombre_institucion','$Direccion_institucion','$Telefono_institucion','$Ruc_institucion')";
    }else{
        $sql="insert into registrosnormal (nombres, apellidos, cedula, correo, direccion , telefono, pais, ciudad, institucion) values ('$Nombres','$Apellidos','$Cedula','$Correo','$Direccion','$Telefono','$Pais','$Ciudad','$Institucion')";
    }
$resSql=$miconexion->consulta($sql);
if (!$resSql) {
	echo '<script>alert("SQL Incorrectos...");</script>';
	echo "<script>location.href='../index.php'</script>";
}else{
	echo '<script>alert("SQL correctos :)...");</script>';
	echo "<script>location.href='../index.php'</script>";
}
?>