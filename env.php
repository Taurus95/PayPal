<?php
  $variables = [
      //URLS for payments
      'PAYPAL_URL' => 'https://www.sandbox.paypal.com/cgi-bin/webscr',
      'PROYECT_BASE_URL' => 'https://andres.c.c1.cl/PayPal',
      'PROYECT_SUCCESSE_URL' => 'https://andres.c.c1.cl/PayPal/success.php',
      'PROYECT_CANCEL_URL' => 'https://andres.c.c1.cl/PayPal/cancelled.php',
      //accounts for payment
      //could be a list separate per ,
      'EMAILS_AVALAIBLES' => "andres.chacon-facilitator@vinculo.cl, test@test.cl"
  ];
  foreach ($variables as $key => $value) {
      putenv("$key=$value");
  }

?>
