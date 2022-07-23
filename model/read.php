<?php
session_start();
include ("conexion.php");

$nombre=$_POST["user"];
$contraseña=$_POST["password"];
$contraseña=hash('sha512',$contraseña);
$read=mysqli_query($conx, "SELECT * FROM usuarios WHERE Nombre='".$nombre."' and Contraseña='".$contraseña."'");
$nr=mysqli_fetch_array($read);

if($nr["idRol"]==1){
    $_SESSION['usuario']=$nombre;
    header ("location:../view/dshb_home.php");
}else
if($nr["idRol"]==2){
    $_SESSION['usuario']=$nombre;
    header ("location:../index.php");
}else{
    echo "<script>alert('Nombre o contraseña equivocada');window.history.go(-1);</script>";
}