# Paypal integration with IPN

Integration of payments with Paypal IPN in PHP

## Getting Started

Clone the proyect on your server path, create your own .env from the .env.example, run the database located into the folder 'db' and then go to the paypal folder with your browser, you wil be redirect inmediately.

### Prerequisites

You need Apache, PHP >= 7.0, MYSQL or MARIADB and composer(for resolve dependencies).


## Built With

* [Composer](https://getcomposer.org/) - Dependency Management


## Versioning

We use [Git](https://git-scm.com/) for versioning.

## Authors

* Andrés (Taurus95 on github)


## More

#################################################
Pasos para configurar con cuenta real:
Cuenta tipo bussines

1. Ingresar a cuenta paypal ->  Configuracion -> selling tools ->
Instant payments notifications -> choose IPN -> cargar URL que apunte al archivo "listener.php"
->enable recive IPN messages

2. COnfigurar urls en archivo "env.php". INCLUIR CORREO ELECTRONICO DE CUENTA PAYPAL QUE RECIBIRA LOS PAGOS.

3. Configurar conexion a BBDD en archivo "db/Connection.php"
SCRIPT PARA TABLA EN CARPETA DB "paypal_payments.sql"

#################################################

###### PARA PRUEBAS TESTING #####################
Crear cuentas de testing para tus necesidades...

1. entrar a https://www.sandbox.paypal.com/ con cuenta falsa de vendedor
user: andres.chacon-facilitator@vinculo.cl
pass: vinculo.paypal

REALIZAR EL PASO N1 descrito arriba. COnfigurar URL del IPN(ESTO SERA DEPENDIENDO DE LA URL EN LA QUE SE MONTE ESTE PROYECTO)

2. cargar variable en true en listener.php
$enable_sandbox = true;

3. configurar urls en env.php para que apunten a sandbox y al proyecto .

4. para pagar la cuenta seria con :
user: andres.chacon-buyer@vinculo.cl
pass: vinculo.paypal
