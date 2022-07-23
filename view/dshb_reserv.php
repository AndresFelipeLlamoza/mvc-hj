<?php

session_start();
if(!isset($_SESSION['usuario'])){
    echo "<script>alert('Debes iniciar sesion');location='/mvc-hj/view/template/login.php';</script>";
    session_destroy();
    die();
}

include ("../model/conexion.php");

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="/mvc-hj/css/dshb_reserv.css">
    <link rel="stylesheet" href="/mvc-hj/css/styles/responsive.css">
    <title>Administración - Reservas</title>
</head>
<body>
    <!--SIDEBAR-->
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
                    <h2>RESERVAS</h2>
                </div>
                    <label for="perfil"><a href="/mvc-hj/model/close.php">Cerrar sesion</a></label>
                    <p><?php echo $_SESSION['usuario']?></p>
                    <img src="/mvc-hj/img/profile.png" name="perfil">
                </div>
            </div>

            <!--RESERVS-->
            <div class="reserv">
                <table>
                    <thead>
                        <tr>
                            <td><h4>Nombre</h4></td>
                            <td><h4>Producto</h4></td>
                            <td><h4>Cantidad</h4></td>
                            <td><h4>Valor</h4></td>
                            <td><h4>Acciones</h4></td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Jesus Manuel Velasquez</td>
                            <td>Huevos AAA</td>
                            <td>3</td>
                            <td>$48.000</td>
                            <td class="rb">
                                <a href="#"><button class="edt">Detalle</button></a>
                                <a href="#"><button class="del">Eliminar</button></a>

                                <a href="#"><button id="edt"><i class='bx bx-show-alt'></i></button></a>
                                <a href="#"><button id="del"><i class='bx bx-trash'></i></button></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="/mvc-hj/view/template/menu.js"></script>
</body>
</html>