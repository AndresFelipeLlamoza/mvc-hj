<?php
include ("conexion.php");

$users="SELECT * FROM usuarios";
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="Estilos/Navbar.css">
    <link rel="stylesheet" href="Estilos/indexstyle.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>
<body>
    <!--navbar-->
    <nav>

<!--BotonCheck-->
<input type="checkbox" id="check">
<label for="check" class="checkbtn">
    <i class="fas fa-bars"></i>
</label>

<!--Imagen del navbar-->
<a href="#" class="logo">
    <img src="Img/LogoPollitoFutbol (2).png" alt="" class="Logonav">
</a>

<!--Enlaces del navbar-->
    <ul>
        <li><a href="#">INICIO</a></li>
        <li><a href="login.html">CERRAR SESION</a></li>
       
    </ul>
</nav>
<br>
<br>
<br>
<br>
<br>
<br>
<!--TABLA-->
<div class="tabla">
    <div class="thead">
        <div class="hitem">ID</div>
        <div class="hitem">Nombre</div>
        <div class="hitem">Correo</div>
        <div class="hitem">Acciones</div>
    </div>

    <div class="tbody">
    <?php $show=mysqli_query($conx,$users);
        while($row=mysqli_fetch_assoc($show)) { ?>
        <div class="bitem"><?php echo $row["idUsuario"];?></div>
        <div class="bitem"><?php echo $row["Nombre"];?></div>
        <div class="bitem"><?php echo $row["Correo"];?></div>
        <div class="a">
            <a href="#">Editar</a> |
            <a href="#">Eliminar</a>
        </div>
        <?php } mysqli_free_result($show);?>
    </div>
</div>

</body>
</html>