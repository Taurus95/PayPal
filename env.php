<?php
  $variables = [
      //DB data
      'DB_HOST' => 'localhost',
      'DB_USERNAME' => 'root',
      'DB_PASSWORD' => 'root19520',
      'DB_NAME' => 'csolu4_clientes_andres',

      //URLs for payments
      'PAYPAL_URL' => 'https://www.sandbox.paypal.com/cgi-bin/webscr',
      'PROYECT_BASE_URL' => 'https://quick-monkey-66.localtunnel.me/WorkSpaceVinculo/PayPal',
      'PROYECT_SUCCESSE_URL' => 'https://quick-monkey-66.localtunnel.me/WorkSpaceVinculo/PayPal/success.php',
      'PROYECT_CANCEL_URL' => 'https://quick-monkey-66.localtunnel.me/WorkSpaceVinculo/PayPal/cancelled.php',
      //accounts for payment
      //could be a list separate per ,
      'EMAILS_AVALAIBLES' => "andres.chacon-facilitator@vinculo.cl, test@test.cl"
  ];
  foreach ($variables as $key => $value) {
      putenv("$key=$value");
  }

?>
