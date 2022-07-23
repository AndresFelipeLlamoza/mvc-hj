<?php 

include ("conexion.php");

$id = $_POST ["id"];
$nombre=$_POST["nombre"];
$correo=$_POST["correo"];
$contraseña=$_POST["contraseña"];

$actualizar = "UPDATE usuarios SET Nombre='$nombre', Correo='$correo', Contraseña='$contraseña' WHERE id_Usuario = '$id'" ;
$result = mysqli_query($conx, $actualizar);

if(isset($result)){
    echo "<script>alert('Registro actualizado');window.location='/mvc-hj/view/dshb_client.php';</script>";
}else{
    echo "<script>alert('Error al actualizar este registro');window.history.go(-1)</script>";
}
?>