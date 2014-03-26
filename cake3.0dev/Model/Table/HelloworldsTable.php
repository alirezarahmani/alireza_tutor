<?php
namespace App\Model\Table;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class HelloworldsTable extends Table {
	


public  function  validationDefault() {
		$validator = new Validator();
        $validator
            ->allowEmpty('username', false)
            ->allowEmpty('password', false)
			->add('password', ['length' => ['rule' => ['minLength', 10],'message' => 'Titles need to be at least 10 characters long',]]);
        return $validator;
    }	
}