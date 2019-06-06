<!--DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"-->
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>Pagos</title>

    <link href="public/css/boostrap.css" rel="stylesheet" type="text/css" />
    <link href="public/css/normalize.css" rel="stylesheet" type="text/css" />
    <link href="public/css/style.css" rel="stylesheet" type="text/css" />
    <link href="public/css/styleMenu.css" rel="stylesheet" type="text/css" />
    <link href="public/css/jquery-ui.css" rel="stylesheet" type="text/css" />

    <?php include "env.php"; ?>
</head>

<body>
    <!-- include menu on this project -->
    <?php include_once './public/menu.php'; ?>

    <div class="col-xs-12 col-sm-3 table table-bordered m02 contenido01">
        <form name="form3" action="<?php echo getenv('PAYPAL_URL'); ?>" method="post">
            <table class="table">
                <tbody>
                    <tr>
                        <th class="table__heading titulos01">Completar Transacción</th>
                    </tr>
                </tbody>
            </table>

            <!-- tabla -->
            <table class="table">

                <tbody>
                    <tr>
                        <td class="table__content">Monto a pagar:</td>
                        <td class="table__content"><strong>$ 29.000</strong></td>
                    </tr>

                    <tr>
                        <td class="table__content">Descripcion:</td>
                        <td class="table__content">Servicio mensual</td>
                    </tr>

                    <tr>
                        <td class="table__content">titular:</td>
                        <td class="table__content">andres.chacon-buyer@vinculo.cl</td>
                    </tr>

                </tbody>
                <!-- Get paypal email address from core_config.php -->
                <input type="hidden" name="business" value="andres.chacon-facilitator@vinculo.cl">

                <!-- Specify product details -->
                <input type="hidden" name="item_name" value="Servicio mensual">
                <input type="hidden" name="item_number" value="109">
                <input type="hidden" name="amount" value="10">
                <input type="hidden" name="currency_code" value="USD">

                <!-- Return URLs -->
                <input type='hidden' name='cancel_return' value='<?php echo getenv('PROYECT_CANCEL_URL'); ?>'>
                <input type='hidden' name='return' value='<?php echo getenv("PROYECT_SUCCESSE_URL"); ?>'>
            </table>
            <!-- tabla -->
            <!-- Submit Button -->
            <input type="hidden" name="cmd" value="_xclick">
            <input name="notifica3" type="submit" class="boton" value="Pagar con Paypal!">
        </form>
    </div>

</body>

</html>
