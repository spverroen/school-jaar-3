<?php

require_once './model/Logic.php';

class Controller {

    private $Logic;

    public function __construct() {
        $this->Logic = new Logic();
    }

    public function Handler() {
        try {
            $action = isset($_REQUEST['action'])?$_REQUEST['action']:NULL;
            switch ($action) {
                case 'create':
                    $this->collectCreate();
                    break;
                case 'read':
                    $this->collectRead();
                    break;
                case 'update':
                    $this->collectUpdate();
                    break;
                case 'delete':
                    $this->collectDelete();
                    break;
                case 'createform':
                    include './view/create.php';
                    break;
                case 'updateform':
                    include './view/update.php';
                    break;
                default:
                    $this->collectRead();
                    break;
            }
        } catch (ValidationException $e) {
            $errors = $e->getErrors();
        }
    }

    private function collectCreate() {
        if(!isset($_REQUEST["voornaam"])) throw new Exception();
        if(!isset($_REQUEST["achternaam"])) throw new Exception();
        if(!isset($_REQUEST["leeftijd"])) throw new Exception();
        if(!isset($_REQUEST["geslacht"])) throw new Exception();

        $this->Logic->create($_REQUEST["voornaam"], $_REQUEST["achternaam"], $_REQUEST["leeftijd"], $_REQUEST["geslacht"]);
        $this->collectRead();
    }

    private function collectRead() {
        $personen = $this->Logic->read();

        include './view/read.php';
    }

    private function collectUpdate() {
        if(!isset($_REQUEST["id"])) throw new Exception();
        if(!isset($_REQUEST["voornaam"])) throw new Exception();
        if(!isset($_REQUEST["achternaam"])) throw new Exception();
        if(!isset($_REQUEST["leeftijd"])) throw new Exception();
        if(!isset($_REQUEST["geslacht"])) throw new Exception();

        $this->Logic->update($_REQUEST["id"], $_REQUEST["voornaam"], $_REQUEST["achternaam"], $_REQUEST["leeftijd"], $_REQUEST["geslacht"]);
        $this->collectRead();
    }

    private function collectDelete() {
        if(!isset($_REQUEST["id"])) throw new Exception();

        if(!$this->Logic->delete($_REQUEST["id"])) {
            throw new Exception("Geen persoon gevonden om te verwijderen");
        }

        $this->collectRead();
    }

    public function __destruct() {

    }
}