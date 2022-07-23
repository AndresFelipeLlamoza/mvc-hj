<?php
include ("header-detalle.php");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/mvc-hj/css/form.css">
    <link rel="stylesheet" href="/mvc-hj/css/Navbar.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="pq" >
    <form action="/mvc-hj/model/createpqrs.php" method="post">
        <h3>FORMULARIO PQRS</h3>
        <p>Te responderemos mediante correo electrónico o teléfono.</p>
        <input type="text" placeholder="nombre" name="nombre" required>
        <input type="email" placeholder="correo" name="correo" required>
        <input type="tel" placeholder="telefono" name="telefono" required>
        <select name="tipo" id="">
            <option>Queja</option>
            <option>Pregunta</option>
            <option>Reclamo</option>
            <option>Sugerencia</option>
        </select>
        <input type="text" max-length="500" placeholder="mensaje" name="mensaje" required>
        <center><button type="submit">Enviar</button></center>
    </form>
    </div>

<?php    
include ("footer.php");
?>

</body>
</html>
