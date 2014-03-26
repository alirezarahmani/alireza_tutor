<?php
echo $this->Form->create();
echo $this->Form->input('username', array('type' => 'text','label'=>__('username')));
echo $this->Form->input('password', array('type' => 'password'));
echo $this->Form->end('Submit');
