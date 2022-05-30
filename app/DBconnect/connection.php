<?php

namespace app\DBconnect;

require $_SERVER['DOCUMENT_ROOT'] . '/Proiect/vendor/autoload.php';

class Connection {

    public $dbServerName = 'localhost';
    public $dbUserName = 'root';
    public $dbPassword = '';
    public $dbName = 'project';
    public $connectionE;

    public function connect(){
        $conn = mysqli_connect($this->dbServerName, $this->dbUserName, $this->dbPassword, $this->dbName);
        return $this->connectionE = $conn;
    }
    public function fetchsql($sql){
        $result = mysqli_query($this->connectionE, $sql);
        return $result;
    }
}

?>