<?php

include ("../model/conexion.php");

session_start();
if(!isset($_SESSION['usuario'])){
    echo "<script>alert('Debes iniciar sesion');location='/mvc-hj/view/template/login.php';</script>";
    session_destroy();
    die();
}

$mensajes = "SELECT * FROM mensajes";

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="/mvc-hj/css/dshb_client.css">
    <link rel="stylesheet" href="/mvc-hj/css/responsive.css">
    <title>Administración - Mensajes</title>
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
                    <h2>MENSAJES</h2>
                </div>
                <div class="profile">
                <label for="perfil"><a href="/mvc-hj/model/close.php">Cerrar sesion</a></label>
                    <p><?php echo $_SESSION['usuario']?></p>
                    <img name="perfil" src="/mvc-hj/img/profile.png">
                </div>
            </div>

            <div class="table">
                <table>
                    <thead>
                        <tr>
                            <td><h4>No. MENSAJE</h4></td>
                            <td><h4>NOMBRE</h4></td>
                            <td><h4>CORREO</h4></td>
                            <td><h4>TELEFONO</h4></td>
                            <td><h4>TIPO</h4></td>
                            <td><h4>DESCRIPCION</h4></td>
                            <td><h4>ACCION</h4></td>
                        </tr>
                    </thead>
                    <?php foreach ($conx->query($mensajes) as $row){?>
                        <tr>
                            <td><?php echo $row ["idMensaje"];?></td>
                            <td><?php echo $row ["Nombre"];?></td>
                            <td><?php echo $row ["Correo"];?></td>
                            <td><?php echo $row ["Telefono"];?></td>
                            <td><?php echo $row ["Tipo"];?></td>
                            <td><?php echo $row ["Mensaje"];?></td>
                            <td class="ab">
                                <a href="/mvc-hj/model/deletepqrs.php?id=<?php echo $row ["idMensaje"];?>"><button class="delete"><i class='bx bx-trash'></i>Eliminar</button></a>
                            </td>
                        </tr>
                        
                        <?php } ?>
                        
                </table>
            </div>
        </div>
    </div>

    
    <script src="/mvc-hj/view/template/menu.js"></script>
</body>
</html>