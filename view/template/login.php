

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="/mvc-hj/img/Logo.png">
    <link rel="stylesheet" href="/mvc-hj/css/navbarl.css">
    <link rel="stylesheet" href="/mvc-hj/css/formulario.css">
    <link rel="stylesheet" href="libs/bootstrap/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a8a398d15e.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="/mvc-hj/js/validation.js"></script>
    <title>Huevos Jireth</title>
</head>
<body style="background-image:url(/mvc-hj/img/Huevos1.jpg);">

<nav>
<!--BotonCheck-->
<input type="checkbox" id="check">
<label for="check" class="checkbtn">
<img  class="config" src="../mvc-hj/img/config.png" alt="">
</label>
<!--Imagen del navbar-->
<a href="/mvc-hj/index.php" class="logo">
	<img src="/mvc-hj/img/Logo.png" alt="" class="Logonav">
</a>
<!--Enlaces del navbar-->
</nav>

<!--NAVBAR-->
<div class="container">
  <!--FORMULARIOS-->
  <div class="form" >
    <!--Formulario de login-->
    <form action="/mvc-hj/model/read.php" method="post" class="login">
        <!--Imagen-->
        <div class="imgform">
          <img src="/mvc-hj/img/PollitoFutbol.png" alt="" class="PollitoFutbol">
        </div>
            <!--Usuario/Contraseña-->
            <h1>Inicia Sesion</h1>
            <input type="text" placeholder="Usuario"  minlength="1" maxlength="50" name="user" onkeypress="return sololetras(event);"> 
            <input type="password" placeholder="Contraseña"  name="password" >
            <input type="submit" class="botonlogin" value="Acceder">
            <a class="olvidaste" href="correo.html">¿Olvidaste tu contraseña?</a>
              <!--links-->
              <div class="enlaces">
                <a class="facebook" href="#"><i class="fa-brands fa-facebook"></i></a>
                <a class="instagram" href="#"><i class="fa-brands fa-instagram"></i></a>
                <a class="twitter" href="#"><i class="fa-brands fa-twitter"></i></a>
              </div>  
    </form>
<!--Formulario de registro-->
    <form action="/mvc-hj/model/create.php" method="post" class="register" onsubmit="return validar(event);">
      <!--Imagen-->
      <div class="imgform">
      <img src="/mvc-hj/img/PollitoHuevo.png" alt="" class="PollitoHuevo">
      </div>
      <!--Usuario/Contraseña-->
      <h1>Registrate</h1>
          <input type="text" placeholder="Usuario" id="name" name="user" onkeypress="return sololetras(event);">
          <input type="email" placeholder="Correo" id="email" name="email">
          <input type="password" placeholder="Contraseña" id="password" name="password">
          <div class="terminos">
          <input type="checkbox" name="" id="" required> <a href="#">Acepta nuestros terminos y condiciones</a></div>
          <input type="submit" class="botonregister" value="Registrarse">
<!--links-->
<div class="enlaces">
  <a class="facebook" href="#"><i class="fa-brands fa-facebook"></i></a>
  <a class="instagram" href="#"><i class="fa-brands fa-instagram"></i></a>
  <a class="twitter" href="#"><i class="fa-brands fa-twitter"></i></a>
</div>
    </form>
  </div>
</div>
<!--Footer-->

<section id="contacto">
    <footer class="text-center text-lg-start">    
        <div class="container p-4">
          <div class="row">
            <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
              <h5 class="text-uppercase">Numero de contacto</h5>
              <p> Fijo: 267 0734</p>
              <p>Celular: 3206807276</p>
            </div>
            <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
              <h5 class="text-uppercase">Horario de atencion</h5>
              <p>Lunes a Sabados: 7:00A.M - 9:00P.M</p>
              <p>Domingos: 7:00A.M- 12:00P.M</p>
            </div>    
          </div>  
        </div>
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
          El Señor mi proveedor &copy;Huevos Jireth 2022:
          <a class="text-light" href="#">HuevosJireth.com</a>
        </div>
      </footer>
  </section>
  <script src="libs/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>