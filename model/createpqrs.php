<?php
include ("conexion.php");

$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$telefono = $_POST["telefono"];
$mensaje = $_POST["mensaje"];

$pqrs = "INSERT INTO mensajes (Nombre, Correo, Telefono, Mensaje) VALUES ('$nombre', '$correo', '$telefono','$mensaje')";
$result = mysqli_query($conx, $pqrs);

if(isset($result)){
    echo "<script>alert('Su pqrs ha sido guardada en el sistema');window.location='/mvc-hj/view/template/PQRS.php';</script>";
}else{
    echo "error al registrar su pqrs";
}
?>