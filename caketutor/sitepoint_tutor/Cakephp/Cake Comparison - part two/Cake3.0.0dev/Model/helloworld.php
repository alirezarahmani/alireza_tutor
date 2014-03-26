<?php
App::uses('AuthComponent', 'Controller/Component');

class Helloworld extends AppModel {

public function beforeSave($options = array()) {
        var_dump($this->data);
        $this->data['Helloworld']['password'] = AuthComponent::password($this->data['Helloworld']['password']);
        return true;
    } 

}