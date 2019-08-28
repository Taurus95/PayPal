##############################
##############################
MODULO PARA INTEGRAR CON PayPal
##############################
##############################

Pantalla inicial para el flujo: "index.php"

#################################################
detalles que faltarian para un paso a produccion:
#################################################
1. Recibir en paypalPayment.php los datos correctos del producto que se va a cancelar.

2. Configurar checkPayment.php para que valla a la BD y corrobere que el pago se hiso de la forma correcta y concuerda con la descripcion y detalle total del producto. Y que actualice el estado de la cuenta cuando esta todo correcto.

3. Detalles graficos como el uso del menu y redireccionamientos.

4. Faltaria una forma de pasar el monto a dolares. TODO ES EN DOLARES O EU OOTRAS DIVISAS MENOS CLP
#################################################

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
