<?php


class Connection extends PDO {

    protected $host = "localhost";
    protected $dbname = "csolu4_clientes_andres";
    protected $username = "root";
    protected $password = "root19520";

    function __construct() {
        try {
            parent::__construct('mysql:host='.$this->host.';dbname='.$this->dbname, $this->username, $this->password);
            parent::setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (Exception $ex) {
            die('The database doesn"t exist');
        }
    }
}
