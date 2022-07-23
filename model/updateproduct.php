<?php
include ("conexion.php");

$id = $_POST ["id"];
$nombre=$_POST["nombre"];
$precio=$_POST["precio"];
$descripcion=$_POST["descripcion"];

$updateproduct = "UPDATE productos SET idProducto = '$id', Nombre = '$nombre', Precio = '$precio', Descripcion = '$descripcion' WHERE idProducto = '$id'";
$result = mysqli_query ($conx, $updateproduct);

if(isset($result)){
    echo "<script>alert('Registro actualizado');window.location='/mvc-hj/view/dshb_product.php';</script>";
}else{
    echo "<script>alert('Error al actualizar este registro');window.history.go(-1)</script>";
}
?>