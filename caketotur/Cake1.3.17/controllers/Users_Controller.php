<?php
class UsersController extends AppController {
    public function beforeFilter() {
	parent::beforeFilter();
	$this->Auth->allow('register'); // Letting users register themselves
	$this->Auth->allow('login');
}
//////
    function index() {
        $this->set('msg', 'Hello World! login Succeded');
    }

    function login()
    {
     //Auth magic 
    }
	function logout()
	{
	$this->Auth->logout();
	$this->redirect(array('controller' => 'pages', 'action' => 'display'));
	}
	function register()
	{
		
		if ($this->User->save($this->data))
		{    
		$this->Auth->login($this->data);
		$this->redirect(array('action' => 'index'), null, true);
		}
		else
		{
		 $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
	    }		
	}
}
?>