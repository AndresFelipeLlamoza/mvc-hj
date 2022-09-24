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
    <script src="/mvc-hj/js/validation.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="pq" >
        <form action="/mvc-hj/model/createpqrs.php" method="post">
        <div class="text">
            <h2>Formulario PQRS</h2>
            <p>Si tienes una pregunta, queja o reclamo, puedes enviar tu inquietud en este formulario y te responderemos por medio de correo electrónico o teléfono.</p>
        </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name" onkeypress="return sololetras(event);">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Correo</label>
                <input type="email" class="form-control" id="email" name="correo">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Telefono</label>
                <input type="text" class="form-control" id="tel" name="telefono" onkeypress="return solonumeros(event);">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Mensaje</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="mensaje">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>

<?php    
include ("footer.php");
?>

</body>
</html>
