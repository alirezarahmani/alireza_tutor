<?php
App::uses('AuthComponent', 'Controller/Component');
class Helloworld extends AppModel {


    public function beforeSave($options = array()) {
		
        $this->data['helloworld']['password']= AuthComponent::password($this->data['helloworld']['password']);
        return true;
    }
}
