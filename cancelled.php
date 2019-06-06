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

    <div class="col-xs-12 col-sm-3 table table-bordered m03 contenido01">
        <table class="table">
            <tr>
                <th class="table__heading titulos01">Transaccion cancelada!</th>
            </tr>
        </table>

        <table class="table">
            <tr>
                <td class="table__content"><code>Si quieres volver a intentar porfavor presiona <a href="./paypalPayment.php"> aqui.</a></code></td>
            </tr>
            <tr>
                <td class="table__content"><code>Si estas tratando de pagar y te redirecciona aqui mas de una vez porfavor contactar con administracion</code></td>
            </tr>
        </table>
    </div>


</body>

</html>
