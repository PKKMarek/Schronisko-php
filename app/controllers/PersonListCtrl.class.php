<?php

namespace app\controllers;

use app\forms\PersonListForm;
use app\transfer\User;
use app\transfer\Result;
use app\sqelki\SelectUser;

class PersonListCtrl{
	private $form;
	private $records;
	// TODO uncomment
	// private $user;
	
	public function __construct(){
		//stworzenie potrzebnych obiektów
		$this->form = new PersonListForm();
	}
	
	public function getParams(){
		// 1. pobranie parametrów
		$this->form->searchbar = getFromRequest('searchbar');
		// TODO uncomment
		// $this->user = unserialize($_SESSION['user']);
	}

    public function action_personShowAll()
    {
		try{

			$this->records = new SelectUser();
			// if ($this->user->privileges == 3) {
				// $this->records = getDB()->select("user", [
				// 	"UserID",
				// 	"FirstName",
				// 	"Surname",
				// 	"Mail",
				// 	"Password",
				// ],[
				// 	"Privilege_ID" => 3
				// ]);
			// }else{
				//getDB()->select("user", [
				// 	"UserID",
				// 	"FirstName",
				// 	"Surname",
				// 	"Mail",
				// 	"Password",
				// ]);
			// }

		} catch (PDOException $e){

			getMessages()->addError('Wystąpił błąd podczas pobierania rekordów');
			if (getConf()->debug) getMessages()->addError($e->getMessage());

		} 

        $this->generateView();
    }

	public function action_personShowLike()
    {
        $this->getParams();

		try{

			$this->records = new SelectUser($this->form->searchbar,"Like");//getDB()->select("user", "*");

		} catch (PDOException $e){

			getMessages()->addError('Wystąpił błąd podczas pobierania rekordów');
			if (getConf()->debug) getMessages()->addError($e->getMessage());

		}

        $this->generateView();
    }

	public function generateView(){
		
		getSmarty()->assign('user',unserialize($_SESSION['user']));

		getSmarty()->assign('page_title','Strona Użytkowników');
		getSmarty()->assign('form',$this->form);
		getSmarty()->assign('users',$this->records->user);
		getSmarty()->display('PersonListView.tpl');
	
    }

}