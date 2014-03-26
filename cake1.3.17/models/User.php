<?php
class User extends AppModel {
    var $name = 'User';
    var $validate = array(
        'username' => array(
                'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A Username is required')),
        'password' => array(
            'rule' => array('minLength', '8'),
            'message' => 'Mimimum 8 characters long'
        )

    );
}
?>