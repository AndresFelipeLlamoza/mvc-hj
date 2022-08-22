<?php
session_start();
if(!isset($_SESSION['usuario'])){
    echo "<script>alert('Debes iniciar sesion');location='/mvc-hj/view/template/login.php';</script>";
    session_destroy();
    die();
}

include ("../mvc-hj/model/conexion.php");

$users="SELECT * FROM productos";

$productos = "SELECT Nombre FROM productos";

$B = array(

    "/mvc-hj/view/template/detallePequeños.php",
    "/mvc-hj/view/template/detalleMedianos.php",
    "/mvc-hj/view/template/detalleAAA.php",
    "/mvc-hj/view/template/detalleDobleyema.php",
  
  );
?>

<?php

$I = array(

    "img/egg.jpg",
    "img/hola.jpg",
    "img/color.jpg",
    "img/Huevito.jpg",

);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="sweetalert2.min.js"></script>
    <link rel="stylesheet" href="sweetalert2.min.css">
    <script src="/mvc-hj/js/popup.js"></script>
    <link rel="stylesheet" href="/mvc-hj/css/popup.css">
    <link rel="stylesheet" href="/mvc-hj/css/slider.css">
    <link rel="stylesheet" href="/mvc-hj/css/Productos.css">
    <link rel="stylesheet" href="/mvc-hj/css/estiloreserva.css">
 
    
</head>
<body>


<?php 
      $nBoton = 0;
      ?>
      <?php
      $nImg = 0;
      ?>    

      <!--Slider-->
<section class="slider">
    <div class="slider_container container1">
        <img src="img/arrow.png" class="slider_arrow" id="before">
        <section class="slider_body slider_body--show" data-id="1">
            <figure class="slider_picture">
            <img src="img/La carrera multimillonaria en el negocio de los ‘huevos vegetales’.jpg" class="slider_img">
            </figure>
        </section>

        <section class="slider_body" data-id="2">
            <figure class="slider_picture">
            <img src="img/egg.jpg" class="slider_img">
            </figure>
        </section>

        <section class="slider_body" data-id="3">
            <figure class="slider_picture">
            <img src="img/7 Proven Ways to Manage Stress at Work (1).jpg" class="slider_img">
            </figure>
        </section>
        <img src="img/arrow2.jpg" class="slider_arrow" id="next">
      </div>
</section>

    <!--Productos-->
<section id="productos">
    <div class="barrita"><br>
      <h1>PRODUCTOS</h1>
      <br>
  </div>

  <?php
   $show=mysqli_query($conx,$users);
        while($row=mysqli_fetch_assoc($show)) { ?>
        
        <div class="productos">
        <div class="pedaso" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.3)), url(<?php echo $I[$nImg];?>);">
    <?php 
    $nImg = $nImg + 1;?>
      <h1>
        <?php echo $row["Nombre"];?>
      </h1>
    <p>$<?php echo $row["Precio"];?></p>
    <p style="color: greenyellow ">Cantidad disponible: 45</p>
    <p><?php echo $row["Descripcion"];?></p>
    <a href=" <?php echo $B[$nBoton];?>" class="hue">Ver detalle</a> 
    </div>
    </div>
    </center>
    <?php $nBoton = $nBoton + 1;
    
    } mysqli_free_result($show);

    ?>
</section>

<!--Reservas-->
<sectionc class="boxreserva">
    <center><button class="oprsvbx" id="oprsvbx">Reservar</button></center>

    <div class="boxrsv" id="boxrsv">
        <div class="rsvform" id="rsvform">
        <form action="" method="post">
            <h4>HAZ TU RESERVA YA!!</h4>
            <center><input type="hidden" id="user_reserv" value="<?php echo $_SESSION['usuario']?>" readonly></center>
            <label>Escoje tu producto</label>
            <br>
            <select>
                <option>--Seleccione--</option>
                <?php $showp = mysqli_query($conx,$productos);
                while($rowp=mysqli_fetch_assoc($showp)) { ?>
                <option><?php echo $rowp["Nombre"]?></option>
                <?php } mysqli_free_result($showp)?>
            </select>
            <br>
            <label>Precio</label>
            <br>
            <input id="precio" type="text" style="width:100px" readonly>
            <br>
            <label>Cantidad</label>
            <br>
            <input type="number" name="cantidad" min="1" max="5" pattern="^[0-9]+">
            <br>
            <label>Valor total</label>
            <span><h3>$ 15.000</h3></span>
            <br>
            <center>
                <button class="reservation">Reservar</button>
                <button class="cancelrsv" id="cancelrsv">Cancelar</button>
            </center>
        </form>
        </div>
    </div>
</section>


<!--recetas-->
<section id="recetas">
<div class="nreceta"><br>
    <h1>RECETAS QUE TE PODRIA INTERESAR </h1><br>
</div>

<div class="recetas">

    <div class="receta1">
        <img src="img/recetas/receta1.jpg" alt="">
        <h1>HUEVOS A LA FLAMENCA</h1>
        <a href="/mvc-hj/view/template/flamenca.html" class="re">Ver más</a> 
    </div>

    <div class="receta1">
        <img src="img/recetas/receta2.jpg" alt="">
        <h1>HUEVOS BENEDICTOS</h1>
        <a href="/mvc-hj/view/template/benedictos.html" class="re">Ver más</a> 
    </div>

    <div class="receta1">
        <img src="img/recetas/receta3.png" alt="">
        <h1>HUEVOS CON PURE DE AGUACATE</h1>
        <a href="/mvc-hj/view/template/palta.html" class="re">Ver más</a> 
    </div>

    <div class="receta1">
        <img src="img/recetas/receta4.jpg" alt="">
        <h1>HUEVOS TURCOS</h1>
        <a href="/mvc-hj/view/template/turcos.html" class="re">Ver más</a> 
    </div>
</div>
</section>

<!--mision/vision-->
<section id="mision">
<div class="nmivi"><br>
    <h1>MISIÓN Y VISIÓN</h1><br>
</div>

<div class="misionvision">
    <div class="mision">
    <h1>MISIÓN</h1>
    <p>Satisfacer y suplir la necesidad de nuestros clientes, en el segmento del marcando en cuanto a la  comercializacion de huevos de calidad, bajo precio y eficiencia en la entrega del producto.</p>
    </div>

    <div class="vision">
    <h1>VISIÓN</h1>
    <p>Queremos ser una empresa responsable  y reconocida y confiable que cumpla con la expectativas de  nuestros clientes</p>
    </div>
</div>
</section>

<!--js-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script>(function(){
        const sliders = [...document.querySelectorAll('.slider_body')];
        const arrowNext = document.querySelector('#next');
        const arrowBefore = document.querySelector('#before');
        let value;
    
        arrowNext.addEventListener('click', ()=>changePosition(1));
    
        arrowBefore.addEventListener('click', ()=>changePosition(-1));
    
        function changePosition(change){
            const currentElement = Number(document.querySelector('.slider_body--show').
            dataset.id);
    
            value = currentElement;
            value+= change;
    
            console.log(sliders.length)
            if(value === 0 || value == sliders.length+1){
                value = value === 0 ? sliders.length : 1;
            }
    
            sliders[currentElement-1].classList.toggle('slider_body--show');
            sliders[value-1].classList.toggle('slider_body--show');
        }
    })()
    
    </script>

    <script src="/mvc-hj/js/rsvbx.js"></script>
</body>
</html>