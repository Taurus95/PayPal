<?php


class Connection extends PDO {

    protected $host = "localhost";
    protected $dbname = "andresc_paypal_payments";
    protected $username = "andresc_admin";
    protected $password = "admin19520";

    function __construct() {
        try {
            parent::__construct('mysql:host='.$this->host.';dbname='.$this->dbname, $this->username, $this->password);
            parent::setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (Exception $ex) {
            die('The database doesn"t exist');
        }
    }
}
