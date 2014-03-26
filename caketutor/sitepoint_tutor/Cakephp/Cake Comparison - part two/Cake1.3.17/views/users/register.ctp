<legend><?php echo 'Add User'; ?></legend>
        <?php 	
              echo $this->Form->create();            
			  echo $this->Form->input('username', array('type' => 'text'));
              echo $this->Form->input('password');
              echo $this->Form->end('Submit'); 
              echo $this->Form->end();?>
         </div>
		 
