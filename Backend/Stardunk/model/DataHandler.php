<?php

class DataHandler {

    private $username = "sven";
    private $password = "sven";
    private $dbname = "stardunk";
    private $hostname = "localhost";
    private $handler = 0;

    function __construct() {
        $this->handler = new PDO("mysql:host=" . $this->hostname . ";dbname=" . $this->dbname, $this->username, $this->password);
        $this->handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function CreateData($sql, $params) {
        $stmt = $this->handler->prepare($sql);
        $stmt->execute($params);
        return $stmt->rowCount();
    }

    public function ReadData($sql, $params) {
        $stmt = $this->handler->prepare($sql);
        $stmt->execute($params);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function UpdateData($sql, $params) {
        $stmt = $this->handler->prepare($sql);
        $stmt->execute($params);
        return $stmt->rowCount();
    }

    public function DeleteData($sql, $params) {
        $stmt = $this->handler->prepare($sql);
        $stmt->execute($params);
        return $stmt->rowCount();
    }

}
?>