<?php
$conx = mysqli_connect ('localhost', 'root', '', 'huevosjireth');
if (isset($conx)){
    //echo ("conexion establecida");
}else{
    echo ("error de conexion");
}

$id = $_GET ["id"];
$clientes = "SELECT * FROM usuarios WHERE idUsuario = '$id'"

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
    <title>Actualizar</title>
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
            </ul>
        </div>

        <!--NAVBAR-->
        <div class="content">
            <div class="navbar">
                <div class="n1">
                    <i class='bx bx-menu' id="btn-menu"></i>
                    <h2>REGISTRO SELECCIONADO</h2>
                </div>
                <div class="profile">
                    <img src="/mvc-hj/img/profile.png">
                </div>
            </div>

            <!--BOARD-->
            <form action="/mvc-hj/model/update.php" method="post">
            <div class="table">
                <table>
                    <thead>
                        <tr>
                            <!---<td><h4>Id</h4></td>-->
                            <td><h4>nombre</h4></td>
                            <td><h4>correo</h4></td>
                            <td><h4>contraseña</h4></td>
                            <td><h4>Accion</h4></td>
                        </tr>
                    </thead>
                    <?php foreach ($conx->query("SELECT * from usuarios WHERE idUsuario = '$id'") as $row){?>
                        <tr>
                            <input type="hidden" value="<?php echo $row ["idUsuario"];?>" name="id">
                            <td><input type="text" value="<?php echo $row ["Nombre"];?>" name="nombre"></td>
                            <td><input type="text" value="<?php echo $row ["Correo"];?>" name="correo"></td>
                            <td><input type="text" value="<?php echo $row ["Contraseña"];?>" name="contraseña"></td>
                            <td class="ab"><input type="submit" class="edit" value="Actualizar campos"><i class='bx bxs-pencil'></i></td>
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