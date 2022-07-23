<?php
session_start();
if(!isset($_SESSION['usuario'])){
    echo "<script>alert('Debes iniciar sesion');location='/mvc-hj/view/template/login.php';</script>";
    session_destroy();
    die();
}

$conx = mysqli_connect ('localhost', 'root', '', 'huevosjireth');
if (isset($conx)){
    //echo ("conexion establecida");
}else{
    echo ("error de conexion");
}

$id = $_GET ['id'];
$productos = "SELECT * FROM productos WHERE idProducto = '$id'";

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
    <title>Administración - Productos</title>
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
                <label for="perfil"><a href="/mvc-hj/model/close.php">Cerrar sesion</a></label>
                    <p><?php echo $_SESSION['usuario']?></p>
                    <img name="perfil" src="/mvc-hj/img/profile.png">
                </div>
            </div>

            <div class="table">
                <form action="/mvc-hj/model/updateproduct.php" method="POST">
                <table>
                    <thead>
                        <tr><td><h4>ID</h4></td>
                            <td><h4>NOMBRE PRODUCTO</h4></td>
                            <td><h4>PRECIO</h4></td>
                            <td><h4>DESCRIPCION</h4></td>
                            <td><h4>ACCIONES</h4></td>
                        </tr>
                    </thead>
                    <?php foreach ($conx->query("SELECT * from productos WHERE idProducto = '$id'") as $row){?>
                        <tr>
                            <td><input type="text" name="id" value="<?php echo $row ["idProducto"];?>"></td>
                            <td><input type="text" name="nombre" value="<?php echo $row ["Nombre"];?>"></td>
                            <td><input type="text" name="precio" value="<?php echo $row ["Precio"];?>"></td>
                            <td><input type="text" name="descripcion" value="<?php echo $row ["Descripcion"];?>"></td>
                            <td class="ab"><input type="submit" class="edit" value="Actualizar campos"><i class='bx bxs-pencil'></i></td>
                           
                        </tr>
                        
                        <?php } ?>
                        
                </table>
            </div>
            </form>
        </div>
    </div>

    
    <script src="/mvc-hj/view/template/menu.js"></script>
</body>
</html>