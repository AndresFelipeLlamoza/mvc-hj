<?php

$conx = mysqli_connect ('localhost', 'root', '', 'huevosjireth');

$reserva = "SELECT * FROM detalle_reserva"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/mvc-hj/css/NavbarL.css">
    <link rel="stylesheet" href="/mvc-hj/css/detalleAAA.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">    <link rel="stylesheet" href="libs/bootstrap/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/a8a398d15e.js" crossorigin="anonymous"></script>
    <title>Detalles huevos pequeños</title>
</head>
<body>
 
  <!--navbar-->
  <?php include "header-detalle.php"?>

<!--Detalle del producto-->

<form class="detalle">

    <div class="productoaaa">
        <img src="/mvc-hj/img/productos/pequeños.jpg">
    </div>

    <div class="descripcion">
      <?php  ?>

        <h2>Huevos pequeños</h2>
        <p class="descripciontexto">
            - Estos huevos se destacan por ser los mas pequeños.<br>
            - Son de color beige. <br>
            - No contiene las mismas proteinas que sus predecesores. <br>
            - Panal de 30 unidades. <br>
            <span style="color: yellow"> - A la hora de haber realizado su reserva, tendra un plazo de 3 horas para reclamar su pedido.</span> 
        </P>
         </ul>    
        </p>
        <p class="precio">$10.000</p>
        

    </div>
</form>
 <!--footer-->
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
