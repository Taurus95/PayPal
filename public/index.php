<?php
//session for testing
session_start();

include_once '../vendor/autoload.php';
//cargamos variables de entorno
$dotenv = Dotenv\Dotenv::create(__DIR__.'/../');
$dotenv->load();

$_SESSION["total_amount"]=rand(1, 5);
$_SESSION["item_name"]="Orden de pago generada por servicio";
$_SESSION["item_number"]=rand(1, 100000);
$_SESSION["currency_code"]="USD";
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
            <form action="<?php echo getenv('PAYPAL_URL'); ?>" method="POST">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Transaccion en paypal</h5>
                        <label for="amount">Monto a pagar:</label>
                        <p id="amount"><strong><?php echo isset($_SESSION['total_amount'])? $_SESSION['total_amount']:" "; ?>
                                <?php echo isset($_SESSION['currency_code'])? $_SESSION['currency_code']:" "; ?></strong></p>
                        <label for="amount">Descripcion:</label>
                        <p id="amount"><?php echo isset($_SESSION['item_name'])? $_SESSION['item_name']:" "; ?></p>
                        <label for="amount">Orden de pago:</label>
                        <p id="amount"><?php echo isset($_SESSION['item_number'])? $_SESSION['item_number']:" "; ?></p>
                        <input type="submit" class="btn btn-success" value="Pagar con Paypal!">
                    </div>
                </div>
                <!-- Get paypal email address from core_config.php -->
                <input type="hidden" name="business" value="andres.chacon-facilitator@vinculo.cl">

                <!-- Specify product details -->
                <input type="hidden" name="item_name" value="<?php echo isset($_SESSION['item_name'])? $_SESSION['item_name']:" "; ?>">
                <input type="hidden" name="item_number" value="<?php echo isset($_SESSION['item_number'])? $_SESSION['item_number']:" "; ?>">
                <input type="hidden" name="amount" value="<?php echo isset($_SESSION['total_amount'])? $_SESSION['total_amount']:" "; ?>">
                <input type="hidden" name="currency_code" value="<?php echo isset($_SESSION['currency_code'])? $_SESSION['currency_code']:" "; ?>">

                <!-- Return URLs -->
                <input type='hidden' name='cancel_return' value='<?php echo getenv('PROYECT_CANCEL_URL'); ?>'>
                <input type='hidden' name='return' value='<?php echo getenv("PROYECT_SUCCESSE_URL"); ?>'>
                </table>
                <!-- tabla -->
                <!-- Submit Button -->
                <input type="hidden" name="cmd" value="_xclick">

            </form>
        </div>
        <script src="js/app.js" charset="utf-8"></script>

    </body>
</html>
