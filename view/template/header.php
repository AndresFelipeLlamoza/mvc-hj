<?php

session_start();
if(!isset($_SESSION['usuario'])){
    echo "<script>alert('Debes iniciar sesion');location='/mvc-hj/view/template/login.php';</script>";
    session_destroy();
    die();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../mvc-hj/css/Navbar.css">
    <title>Huevos Jireth</title>
</head>
<body>
<nav>
<!--BotonCheck-->
<input type="checkbox" id="check">
<label for="check" class="checkbtn">
<li><p>Bienvenido <?php echo $_SESSION['usuario']?></p></li>
<img  class="config" src="../mvc-hj/img/config.png" alt="">
</label>
<!--Imagen del navbar-->
<a href="/mvc-hj/index.php" class="logo">
	<img src="/mvc-hj/img/Logo.png" alt="" class="Logonav">
</a>
<!--Enlaces del navbar-->
	<ul>
		<li><p class="usuario"><?php echo $_SESSION['usuario']?></p></li>
		<li><a href="#productos">PRODUCTOS</a></li>	
		<li><a target="_blank " href="/mvc-hj/view/template/pqrs.php">PQRS</a></li>
		<li><a href="#mision">MISIÓN Y VISIÓN</a></li>
		<li><a href="/mvc-hj/view/template/beneficios.php">BENEFICIOS</a></li>
		<li><a class="cerrar" href="/mvc-hj/model/close.php">CERRAR SESION</a></li>
	</ul>
</nav>
</body>
</html>