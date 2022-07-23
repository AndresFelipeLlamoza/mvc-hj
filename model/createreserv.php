<?php
include ("conexion.php");

$cantidad=$_POST["cant"];

$create="INSERT INTO productos (cantidad)
        VALUES ('$cantidad')";

$result=mysqli_query($conx,$cantidad);

if($result){
    echo "<script>alert('cantidad reservada con exito');window.location='/mvc-hj/view/.php';</script>";
}else{
    echo "<script>alert('No se realizo la reserva');window.history.go(-1)</script>";
}