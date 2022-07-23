<?php
session_start();
if(!isset($_SESSION['usuario'])){
    echo "<script>alert('Debes iniciar sesion');location='/mvc-hj/view/template/login.php';</script>";
    session_destroy();
    die();
}

include ("../model/conexion.php");

$clientes = "SELECT * FROM usuarios";

$admin = "SELECT Nombre FROM usuarios WHERE idUsuario = '15428'"

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
    <title>Administración - Clientes</title>
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
                    <h2>CLIENTES</h2>
                </div>
                <div class="profile">
                    <label for="perfil"><a href="/mvc-hj/model/close.php">Cerrar sesion</a></label>
                    <p><?php echo $_SESSION['usuario']?></p>
                    <img name="perfil" src="/mvc-hj/img/profile.png">
                </div>
            </div>

            <!--BOARD-->
            <div class="table">
                <table>
                    <thead>
                        <tr>
                            <td><h4>ID NOMBRE</h4></td>
                            <td><h4>NOMBRE</h4></td>
                            <td><h4>CORREO</h4></td>
                            <td><h4>ACCIONES</h4></td>
                        </tr>
                    </thead>
                    <?php foreach ($conx->query('SELECT * from usuarios') as $row){?>
                        <tr>
                            <td><?php echo $row ["idUsuario"];?></td>
                            <td><?php echo $row ["Nombre"];?></td>
                            <td><?php echo $row ["Correo"];?></td>
                            <td class="ab">
                                <a href="/mvc-hj/view/template/actualizacion.php?id=<?php echo $row ["idUsuario"];?>"><button class="edit"><i class='bx bxs-pencil'></i>Editar</button></a>
                                <a href="/mvc-hj/model/delete.php?id=<?php echo $row ["idUsuario"];?>"><button class="delete"><i class='bx bx-trash'></i>Eliminar</button></a>


                                <a href="/mvc-hj/model/delete.php?id=<?php echo $row ["idUsuario"];?>"><button id="delete"><i class='bx bx-trash'></i></button></a>
                            </td>
                        </tr>
                        
                        <?php } ?>
                        
                </table>

                <!--CLIENT
                <div class="detail-client">
                    <label for="">ID</label>
                    <input type="text" name="" id="">
                    <label for="">Nombre</label>
                    <input type="text" name="" id="">
                    <label for="">Correo</label>
                    <input type="text" name="" id="">
                    <label for="">Contraseña</label>
                    <input type="text" name="" id="">
                </div>
                -->
            </div>
            </form>
        </div>
    </div>

    <script src="/mvc-hj/view/template/menu.js"></script>
</body>
</html>