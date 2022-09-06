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
    <link rel="stylesheet" href="/mvc-hj/css/dshb_client.css">
    <link rel="stylesheet" href="/mvc-hj/css/responsive.css">
    <title>Panel de Control (Clientes) - Huevos Jireth</title>
</head>
<body>
    <!--SIDEBAR-->
    <div class="wrapper">
    <div class="content-wrapper">
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
                    <h2>CLIENTES</h2>
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

            <!--BOARD-->
            <div class="table">
                <table>
                    <thead>
                        <tr>
                            <td><h4>ID</h4></td>
                            <td><h4>NOMBRE</h4></td>
                            <td><h4>CORREO</h4></td>
                        </tr>
                    </thead>
                    <?php foreach ($conx->query("SELECT * from usuarios WHERE idRol !='1'") as $row){?>
                        <tr>
                            <td><?php echo $row ["idUsuario"];?></td>
                            <td><?php echo $row ["Nombre"];?></td>
                            <td><?php echo $row ["Correo"];?></td>
                            
                        </tr>
                        
                        <?php } ?>
                        
                </table>
            </div>
            <div class="reserva-cliente">
                <a href="/mvc-hj/model/reporte.php" target="_blank"><button class="report"><i class='bx bxs-report'></i>Reporte</button></a>
                <a href="/mvc-hj/model/descargareport.php"><button class="download"><i class='bx bxs-download'></i>Descagar reporte</button></a>
            </div>
            </div>
            </form>
        </div>
    </div>

    <script src="/mvc-hj/js/menu.js"></script>
    <script src="/mvc-hj/js/user_modal.js"></script>
    </div>
</div>
</body>
</html>