<<?php
session_start();
?>
<!--DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"-->
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
require('./env.php');
require('./db/Connection.php');

//comprobar que se hiso un pago correcto
//check if the payment was with the correct informations
//session test

//new connection
$conection = new Connection();
$item_no = $_SESSION["item_number"];
//$_SESSION["total_amount"]=10;
//$item_no = 199;
sleep(5);
$stmt = $conection->prepare("SELECT * FROM paypal_payments WHERE item_no = ?");
$stmt->execute(array($item_no));
$data = $stmt->fetchAll();

//compare data
if(sizeof($data)!=0){
    foreach ($data as $value) {
        if($value["payment_status"]=="Completed"){
            if($value["payment_amount"]==$_SESSION["total_amount"]){
                //here we check that the payment was for the correct amount

                //for change the state of the bil

                $_SESSION["payer_email"] = $value["payer_email"];
                $_SESSION["total_amount"] = $value["payment_amount"];
                $_SESSION["item_name"] = $value["item_name"];
                $_SESSION['payment_status'] = $value["payment_status"];

            }else{
                $_SESSION['message_error']="Error: El monto cancelado no corresponde al monto real.";
            }
        }else{
            $_SESSION['message_error']="Error: La transaccion no se ha completado.";
        }
    }
}else{
    $_SESSION['message_error']="Error: No se encontro registro de tal transaccion.";
}

?>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>Pagos</title>

    <link href="public/css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="public/css/normalize.css" rel="stylesheet" type="text/css" />
    <link href="public/css/style.css" rel="stylesheet" type="text/css" />
    <link href="public/css/styleMenu.css" rel="stylesheet" type="text/css" />
    <link href="public/css/jquery-ui.css" rel="stylesheet" type="text/css" />

</head>

<body>

    <!-- include menu on this project -->
    <?php include_once './public/menu.php'; ?>

    <div class="col-xs-12 col-sm-3 table table-bordered m03 contenido01">
        <table class="table">
            <tr>
                <?php
                if(isset($_SESSION['message_error'])){
                    echo "<th class='table__heading titulos01'>Porfavor contactar a administracion.</th>";
                }else{ ?>
                <th class="table__heading titulos01">Transaccion realizada con exito!</th>
            <?php } ?>
            </tr>
        </table>

        <!-- Nombre -->
        <div class="col-xs-12 col-sm-12">

            <table class="table">
                <?php
                if(isset($_SESSION['message_error'])){
                    echo "<tr>
                        <td class='table__content'>Porfavor contactar a administracion.".$_SESSION['message_error']."</td>
                    </tr>";
                }else{ ?>
                    <tbody>
                        <tr class="table__row">
                            <td class="table__content">
                                <p class="text-right"><strong>Descripcion:</strong></p>
                            </td>
                            <td class="table__content">
                                <p class="text-left"><?php echo isset($_SESSION['item_name'])? $_SESSION['item_name']:" "; ?></p>
                            </td>
                        </tr>
                        <tr class="table__row">
                            <td class="table__content">
                                <p class="text-right"><strong>Monto:</strong></p>
                            </td>
                            <td class="table__content">
                                <p class="text-left"><?php echo isset($_SESSION['total_amount'])? $_SESSION['total_amount']:" "; ?></p>
                            </td>
                        </tr>
                        <tr class="table__row">
                            <td class="table__content">
                                <p class="text-right"><strong>E-mail:</strong></p>
                            </td>
                            <td class="table__content">
                                <p class="text-left"><?php echo isset($_SESSION['payer_email'])? $_SESSION['payer_email']:" "; ?></p>
                            </td>
                        </tr>
                        </tr>
                        <tr class="table__row">
                            <td class="table__content">
                                <p class="text-right"><strong>Estado:</strong></p>
                            </td>
                            <td class="table__content">
                                <p class="text-left"><?php echo isset($_SESSION['payment_status'])? $_SESSION['payment_status']:" "; ?></p>
                            </td>
                        </tr>
                    </tbody>
                <?php
                }
                ?>
            </table>
        </div>
        <!-- Nombre fin -->
        <a href="<?php echo getenv('PROYECT_BASE_URL'); ?>" class="btn btn-primary">Volver a inicio</a>

    </div>
</body>
<?php
session_destroy();
?>
</html>
