<?php
include("conexion.php");

$id=$_GET ['id'];

$delete = "DELETE FROM mensajes WHERE idMensaje = '$id'";
$resultado = mysqli_query($conx,$delete);

if(isset($resultado)){
    echo "<script>alert('El registro ha sido eliminado con exito'); window.location=/mvc-hj/view/dshb_mesages.php;</script>";
}
else{
    echo "<script>alert('Error al eliminar este registro'); window.location=/mvc-hj/view/dshb_mesages.php;</script>";
}
?>