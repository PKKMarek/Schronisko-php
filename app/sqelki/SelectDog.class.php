<?php

namespace app\sqelki;

class SelectDog {

	public $dogs; // Dogs


    public function __construct($where = null) {

        if (is_null($where)) {

            $this->dogs = getDB()->select("dog","*");

        }else{

            $this->dogs = getDB()->select("dog","*",[
				'AND' => ['Name[~]' => $where]
			]);

        }
    }
} 