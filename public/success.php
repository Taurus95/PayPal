<?php
session_start();


include_once '../vendor/autoload.php';
//cargamos variables de entorno
$dotenv = Dotenv\Dotenv::create(__DIR__.'/../');
$dotenv->load();
//
// //comprobar que se hiso un pago correcto
// //check if the payment was with the correct informations
// //session test
//
// //new connection
// $conection = new Connection();
// $item_no = $_SESSION["item_number"];
// //$_SESSION["total_amount"]=10;
// //$item_no = 199;
// sleep(5);
// $stmt = $conection->prepare("SELECT * FROM paypal_payments WHERE item_no = ?");
// $stmt->execute(array($item_no));
// $data = $stmt->fetchAll();
//
// //compare data
// if(sizeof($data)!=0){
//     foreach ($data as $value) {
//         if($value["payment_status"]=="Completed"){
//             if($value["payment_amount"]==$_SESSION["total_amount"]){
//                 //here we check that the payment was for the correct amount
//
//                 //for change the state of the bil
//
//                 $_SESSION["payer_email"] = $value["payer_email"];
//                 $_SESSION["total_amount"] = $value["payment_amount"];
//                 $_SESSION["item_name"] = $value["item_name"];
//                 $_SESSION['payment_status'] = $value["payment_status"];
//
//             }else{
//                 $_SESSION['message_error']="Error: El monto cancelado no corresponde al monto real.";
//             }
//         }else{
//             $_SESSION['message_error']="Error: La transaccion no se ha completado.";
//         }
//     }
// }else{
//     $_SESSION['message_error']="Error: No se encontro registro de tal transaccion.";
// }

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
                        <h5 class="card-title">Transaccion realizada con exito!</h5>
                        <label for="amount">Monto:</label>
                        <p id="amount"><strong><?php echo isset($_SESSION['total_amount'])? $_SESSION['total_amount']:" "; ?>
                                <?php echo isset($_SESSION['currency_code'])? $_SESSION['currency_code']:" "; ?></strong></p>
                        <label for="amount">Descripcion:</label>
                        <p id="amount"><?php echo isset($_SESSION['item_name'])? $_SESSION['item_name']:" "; ?></p>
                        <label for="amount">Orden de pago:</label>
                        <p id="amount"><?php echo isset($_SESSION['item_number'])? $_SESSION['item_number']:" "; ?></p>
                        <a href="<?php echo getenv('PROYECT_BASE_URL'); ?>" class="btn btn-primary">Volver a inicio</a>
                    </div>

                </div>
        </div>

        <script src="js/app.js" charset="utf-8"></script>

    </body>
</html>
