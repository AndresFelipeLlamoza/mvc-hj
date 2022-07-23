<?php

include ("conexion.php");

$id = $_GET ["id"];

$eliminarproduct = "DELETE FROM productos where idProducto = '$id'";
$result = mysqli_query($conx, $eliminarproduct);

if(isset($eliminarproduct)){
    header("Location: /mvc-hj/view/dshb_product.php");
}else{
    echo "<script>Alert('No se pudo elimnar el registro');window.history.go(-1);</script>";
}
?>