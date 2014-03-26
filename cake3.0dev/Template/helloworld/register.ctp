<?php
echo $this->Form->create($helloworld);
echo $this->Form->input('username', ['required' => true]);
echo $this->Form->input('password', ['required' => true]);
echo $this->Form->button('Add');
echo $this->Form->end();

