<?php

include ("conexion.php");

$id = $_GET ["id"];

$delete = "DELETE FROM usuarios WHERE idUsuario = '$id'";

$result = mysqli_query($conx, $delete);

if ($result){
    header ("Location: /mvc-hj/view/dshb_client.php");
}else{
    echo "<script>Alert('No se pudo eliminar el registro');window.history.go(-1);</script>";
}

?>