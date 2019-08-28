<?php

include_once '../vendor/autoload.php';
//cargamos variables de entorno
$dotenv = Dotenv\Dotenv::create(__DIR__.'/../');
$dotenv->load();

class Connection extends PDO {

    function __construct() {
        try {
            parent::__construct('mysql:host='.getenv('DB_HOST').';dbname='.getenv('DB_NAME'), getenv('DB_USER'),
             getenv('DB_PASSWORD'));
            parent::setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (Exception $ex) {
            die('The database doesn"t exist');
        }
    }
}
