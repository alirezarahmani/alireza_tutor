<?php
 App::uses('AuthComponent', 'Controller/Component');
class Helloworld extends AppModel {

public function beforeSave($options = array()) {
    if (isset($this->data[$this->alias]['password'])) {
        $this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
    }
	if ( $this->data[$this->alias]['gender']!='male' && $this->data[$this->alias]['gender']!='female' ) {
        $this->data[$this->alias]['gender']='male';
    }
    return true;
    }
function __construct() {
   parent::__construct();
   
   $this->validate = array(
        'username' => array(
                'required' => array(
                'rule' => array('notEmpty'),
                'message' => __('A Username is required')),
		        'required-2' => array(
                'rule' => array('alphaNumeric'),
                'message' => __('Only alphabets and numbers allowed')),	
			    'required-3' => array(
                'rule' => array('between', 6, 64),
                'message' => __('Password should be at least 6 chars long'))),		
        'password' => array(
                'required' => array(
                'rule' => array('notEmpty'),
                'message' => __('A password is required')),
                'required-2' => array(
                'rule' => array('alphaNumeric'),
                'message' => __('Only alphabets and numbers allowed')),			
                'required-3' => array(
                'rule' => array('between', 8, 20),
                'message' => __('Password should be at least 8 chars long'))));

}	

}?>