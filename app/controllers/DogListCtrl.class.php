<?php

namespace app\controllers;

use app\forms\DogListForm;
use app\transfer\User;
use app\transfer\Behavior;
use app\sqelki\SelectDog;
use app\sqelki\SelectBehavior;
use app\sqelki\SelectBehaviorDog;

class DogListCtrl{
	private $form;
	private $dogs;
	private $behaviors;
	private $myBehaviors;
	
	public function __construct(){
		//stworzenie potrzebnych obiektów
		$this->form = new DogListForm();
	}
	
	public function getParams(){
		// 1. pobranie parametrów
		$this->form->searchBar = getFromRequest('searchbar');

	}

    public function action_DogShowLike()
    {
        $this->getParams();

		try {

			$this->dogs = new SelectDog($this->form->searchBar);
			/* getDB()->select("Dog","*",[
				'AND' => ['Name[~]' => $this->form->searchBar]
			]);*/

			$this->behaviors = new SelectBehavior();//getDB()->select("behavioral","*");

			$this->myBehaviors = new SelectBehaviorDog();//getDB()->select("behavioral:dog","*");
			
		} catch (PDOException $e){

			getMessages()->addError('Wystąpił błąd podczas pobierania rekordów');
			if (getConf()->debug) getMessages()->addError($e->getMessage());			
			$this->dogs = [];

		} 

        $this->generateView();
    }

    public function action_DogShowAll()
    {
        try {

			$this->dogs = new SelectDog();//getDB()->select("Dog","*");

			$this->behaviors =  new SelectBehavior();//getDB()->select("behavioral","*");
			
			$this->myBehaviors = new SelectBehaviorDog();//getDB()->select("behavioral:dog","*");
			
		} catch (\Throwable $th) {

			$this->dogs = [];
			//throw $th;
		}

        $this->generateView();
    }
	
	public function generateView(){
		
		getSmarty()->assign('user',unserialize($_SESSION['user']));
		
		getSmarty()->assign('page_title','Strona Główna');
		getSmarty()->assign('form',$this->form);
		getSmarty()->assign('dogs',$this->dogs->dogs);
		getSmarty()->assign('myBehaviors',$this->myBehaviors->myBehaviors);
		getSmarty()->assign('behaviors',$this->behaviors->behaviors);
		getSmarty()->display('DogListView.tpl');
	
    }

}