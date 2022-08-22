<?php

include ("conexion.php");

$id = $_POST["id"];
$usuario = $_POST["nombre"];
$correo = $_POST["correo"];
$contraseña = $_POST["contraseña"];

$update = "UPDATE usuarios SET idUsuario = $id, Nombre = '$usuario', Correo = '$correo', Contraseña = '$contraseña' WHERE idUsuario = $id";
$updtusu = mysqli_query($conx, $update);

if(isset($updtusu)){
    echo "<script>alert('Registro actualizado');window.location='/mvc-hj/view/dshb_client.php';</script>";
}else{
    echo "<script>alert('Error al actualizar este registro');window.history.go(-1)</script>";
}
?>