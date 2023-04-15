<?php
  $nombre = $_POST['nombre'];
  $direccion = $_POST['direccion'];
  $edad = $_POST['edad'];
  $correo = $_POST['email'];
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>
<div class="container mt-5">
        <div class="card">
            <div class="card-header text-center">
                <h1>Bienvenido</h1>
            </div>
            <div class="card-body">
            <?php


        echo "Hola " . $nombre . "<br>";
        echo "Tu dirección es " . $direccion . "<br>";
        echo "Tienes " . $edad . " años y tu correo es " . $correo;
    

?>

</div>
        </div>
    </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>
