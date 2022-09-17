<?php

session_start();
if(!isset($_SESSION['usuario'])){
    echo "<script>alert('Debes iniciar sesion');location='/mvc-hj/view/template/login.php';</script>";
    session_destroy();
    die();
}
include ("../model/conexion.php");
$reservs="SELECT * FROM reservas";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="/mvc-hj/css/dshb_reserv.css">
    <link rel="stylesheet" href="/mvc-hj/css/responsive.css">
    <title>Panel de Control (Reservas) - Huevos Jireth</title>
</head>
<body>
    <!--SIDEBAR-->
    <div class="main">
        <div class="sidebar">
            <center><img src="/mvc-hj/img/Logo.png" id="logo"></center>
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
                    <i class='bx bxs-envelope' title="Mensajes"></i>
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
                <img id="photo" src="/mvc-hj/img/profile.png">
            </div>
            <div id="user_modal" class="user_modal">
                <ul>
                    <li><?php echo $_SESSION['usuario']?></li>
                    <a href="#"><li>Configuración</li></a>
                    <a href="#"><li><a href="/mvc-hj/model/close.php">Cerrar Sesion</a></li></a>
                </ul>
            </div>

            <div class="table-reserv">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Cliente</th>
                            <th>Producto</th>
                            <th>Precio</th>
                            <th>Cantidad</th>
                            <th>Total</th>
                            <th>Fecha</th>
                            <th>Hora</th>
                            <th>Estado</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $show=mysqli_query($conx,$reservs);
                    while($row=mysqli_fetch_assoc($show)){?>
                        <tr>
                            <td><?php echo $row["idReserva"]?></td>
                            <td><?php echo $row["Usuario"]?></td>
                            <td><?php echo $row["Producto"]?></td>
                            <td><?php echo $row["Precio"]?></td>
                            <td><?php echo $row["Cantidad"]?></td>
                            <td>$ <?php echo $row["Total"]?></td>
                            <td><?php echo $row["Fecha"]?></td>
                            <td><?php echo $row["Hora"]?></td>
                            <td><?php echo $row["Estado"]?></td>
                        </tr>
                    <?php } mysqli_free_result($show)?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="/mvc-hj/js/menu.js"></script>
    <script src="/mvc-hj/js/user_modal.js"></script>
</body>
</html>