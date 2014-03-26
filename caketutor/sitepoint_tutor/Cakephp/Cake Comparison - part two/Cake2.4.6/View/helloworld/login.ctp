<?php
echo $this->Form->create(null, array(
    'url' => array('controller' => 'helloworld', 'action' => 'login')
)); 
echo $this->Form->input('username', array('type' => 'text','label'=>__('username')));
echo $this->Form->input('password', array('type' => 'password','label'=>__('password')));
echo $this->Form->end(__('Submit'));
