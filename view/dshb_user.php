<?php
include ("../model/conexion.php");
session_start();
if(!isset($_SESSION['usuario'])){
    echo "<script>alert('Debes iniciar sesion');location='/mvc-hj/view/template/login.php';</script>";
    session_destroy();
    die();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="/mvc-hj/css/dshb_home.css">
    <link rel="stylesheet" href="/mvc-hj/css/responsive.css">
    <title>Panel de Control - <?php echo $_SESSION['usuario']?></title>
</head>
<body>
    <!--SIDEBAR-->
    <div class="main">
        <div class="sidebar">
            <center><a href="/mvc-hj/view/dshb_home.php"><img src="/mvc-hj/img/Logo.png" id="logo"></a></center>
            <ul>
                <li><a href="">
                    <i class='bx bxs-bookmark-minus' title="Principal"></i>
                    <span class="item">Reservas</span>
                </a></li>
                <li><a href="">
                    <i class='bx bxs-cog' title="Clientes"></i>
                    <span class="item">Configuración</span>
                </a></li>
                <li><a href="/mvc-hj/model/close.php">
                    <i class='bx bxs-bookmark-minus' title="Reservas"></i>
                    <span class="item">Cerrar Sesion</span>
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
            </div>
        </div>
    </div>

    <script src="/mvc-hj/js/menu.js"></script>
</body>
</html>