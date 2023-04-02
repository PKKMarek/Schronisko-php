<?php

namespace app\sqelki;

class InsertBehavior {

    public function __construct($where) {

        getDB()->insert("Behavioral:Dog",[
			"Behavior Types" => $where
		]);
        
    }
} 