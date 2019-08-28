<?php
//session for testing
session_start();

include_once '../vendor/autoload.php';
//cargamos variables de entorno
$dotenv = Dotenv\Dotenv::create(__DIR__.'/../');
$dotenv->load();

//fin
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Pagos</title>

        <link href="css/app.css" rel="stylesheet" type="text/css" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <!-- include menu on this project -->
        <?php include_once './menu.php'; ?>

        <div class="container card-payment">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Transaccion Cancelada</h5>
                        <code>Si quieres volver a intentar porfavor presiona <a href="./index.php"> aqui.</a></code>
                        <p>Si estas tratando de pagar y te redirecciona aqui mas de una vez porfavor contactar con administracion</p>
                    </div>
                </div>
        </div>

        <script src="js/app.js" charset="utf-8"></script>

    </body>
</html>
