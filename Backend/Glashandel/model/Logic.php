<?php

require_once './model/DataHandler.php';

class Logic {

    private $DataHandler;

    public function __construct() {
        $this->DataHandler = new DataHandler();
    }

    public function create($voornaam, $achternaam, $leeftijd, $geslacht) {
        $sql = 'INSERT INTO personen (voornaam, achternaam, leeftijd, geslacht) VALUES (?,?,?,?)';
        return $this->DataHandler->CreateData($sql, [$voornaam, $achternaam, $leeftijd, $geslacht]);
    }

    public function read() {
        $sql = 'SELECT * FROM personen';
        return $this->DataHandler->ReadData($sql, []);
    }

    public function update($id, $voornaam, $achternaam, $leeftijd, $geslacht) {
        $sql = 'UPDATE personen SET voornaam = ?, achternaam = ?, leeftijd = ?, geslacht = ? WHERE id = ?';
        return $this->DataHandler->UpdateData($sql, [$voornaam, $achternaam, $leeftijd, $geslacht, $id]);
    }

    public function delete($id) {
        $sql = 'DELETE FROM personen WHERE id = ?';
        return $this->DataHandler->DeleteData($sql, [$id]);
    }

    public function __destruct() {

    }
}