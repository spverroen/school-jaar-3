<?php
require_once 'model/DataHandler.php';

class ContactsLogic {

	public function __construct() {
		$this->DataHandler = new Datahandler('localhost','mysql' ,'dunk' ,'sven' ,'sven');
	}

	public function createContact($name, $phone, $email, $address){

	}

	public function readContacts(){
		$sql = 'SELECT * FROM contacts';
		$results = $this->DataHandler->readsData($sql); 
		return $results;
	}

	public function readContact($id){

	}

	public function updateContact($name, $phone, $email, $address, $id){

	}

	public function deleteContact($id){

	}



}
