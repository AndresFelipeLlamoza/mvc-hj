<?php
session_start();
if(!isset($_SESSION['usuario'])){
    echo "<script>alert('Debes iniciar sesion');location='/mvc-hj/view/template/login.php';</script>";
    session_destroy();
    die();
}

include ("../mvc-hj/model/conexion.php");

$users="SELECT * FROM productos";

$productos = "SELECT Nombre FROM productos";


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Perfil</title>
</head>
<body>
<div class="main">
        <div class="sidebar">
            <center><img src="/mvc-hj/img/logopollitofutbol.png" id="logo"></center>
            <ul>
                <li><a href="/mvc-hj/view/dshb_home.php">
                    <i class='bx bxs-home' title="Principal"></i>
                    <span class="item">Principal</span>
                </a></li>
                <li><a href="/mvc-hj/view/dshb_client.php">
                    <i class='bx bxs-user' title="Clientes"></i>
                    <span class="item">Clientes</span>
                </a></li>
                <li><a href="/mvc-hj/view/dshb_reserv.php">
                    <i class='bx bxs-bookmark-minus' title="Reservas"></i>
                    <span class="item">Reservas</span>
                </a></li>
                <li><a href="/mvc-hj/view/dshb_product.php">
                    <i class='bx bxs-box' title="Productos"></i>
                    <span class="item">Productos</span>
                </a></li>
                <li><a href="/mvc-hj/view/dshb_mesages.php">
                    <i class='bx bxs-card' title="Principal"></i>
                    <span class="item">Mensajes</span>
                </a></li>
            </ul>
        </div>

        <!--NAVBAR-->
        <div class="content">
            <div class="navbar">
                <div class="n1">
                    <i class='bx bx-menu' id="btn-menu"></i>
                    <h2>PRINCIPAL</h2>
                </div>
                <div class="profile">
                    <label for="perfil"><a href="/mvc-hj/model/close.php">Cerrar sesion</a></label>
                    <p><?php echo $_SESSION['usuario']?></p>
                    <img name="perfil" src="/mvc-hj/img/profile.png">
                </div>
            </div>
        </div>
    </div>
</body>
</html>
 
    
