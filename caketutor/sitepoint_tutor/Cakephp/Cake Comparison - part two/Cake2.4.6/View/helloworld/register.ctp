<html>
        <legend><?php echo __('Add User'); ?></legend>
        <?php 	
             echo $this->Form->create(null, array(
    'url' => array('controller' => 'helloworld', 'action' => 'register')
));           
		      echo $this->Form->input('username', array('type' => 'text','label'=>__('username')));
              echo $this->Form->input('password', array('type' => 'password','label'=>__('password')));
			  echo $this->Form->end(__('Submit')); 
?>
</html>
