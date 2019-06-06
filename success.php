<!--DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"-->
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
include "env.php";
session_start();
?>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>Pagos</title>

    <link href="public/css/boostrap.css" rel="stylesheet" type="text/css" />
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
                <th class="table__heading titulos01">Transaccion realizada con exito!</th>
            </tr>
        </table>

        <!-- Nombre -->
        <div class="col-xs-12 col-sm-12">

            <table class="table">
                <tr>
                    <td class="table__heading">
                        <p class="text-right"><strong>Descripcion:</strong></p>
                    </td>
                    <td class="table__heading">
                        <p class="text-left"><?php echo isset($_SESSION['item_name'])? $_SESSION['item_name']:" "; ?></p>
                    </td>
                </tr>
                <tbody>
                    <tr class="table__row">
                        <td class="table__content">
                            <p class="text-right"><strong>Monto:</strong></p>
                        </td>
                        <td class="table__content">
                            <p class="text-left"><?php echo isset($_SESSION['payment_amount'])? $_SESSION['payment_amount']:" "; ?></p>
                        </td>
                    </tr>
                    <tr class="table__row">
                        <td class="table__content">
                            <p class="text-right"><strong>E-mail:</strong></p>
                        </td>
                        <td class="table__content">
                            <p class="text-left">asdasdasd@asdasd.com</p>
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
            </table>
        </div>
        <!-- Nombre fin -->
        <a href="#" class="btn btn-primary">Comprobante</a>
        &nbsp;
        <a href="<?php echo getenv('PROYECT_BASE_URL'); ?>" class="btn btn-primary">Volver a inicio</a>

    </div>
</body>
<?php
session_destroy();
?>
</html>
