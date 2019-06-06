<!--DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"-->
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
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

    <?php include "env.php"; ?>
</head>

<body>
    <!-- include menu on this project -->
    <?php include_once './public/menu.php'; ?>

    <div class="col-xs-12 col-sm-3 table table-bordered m03 contenido01">
        <table class="table">
            <tr>
                <th class="table__heading titulos01">Transaccion con errores!</th>
            </tr>
        </table>

        <table class="table">
            <tr>
                <td class="table__content"><code>Porfavor contactar a administracion.</code></td>
            </tr>
            <tr>
                <td class="table__content"><?php echo isset($_SESSION['message_error'])? $_SESSION['message_error']:" "; ?></td>
            </tr>
        </table>
        <a href="<?php echo getenv('PROYECT_BASE_URL'); ?>" class="btn btn-primary">Volver a inicio</a>
    </div>


</body>
<?php
session_destroy();
?>
</html>
