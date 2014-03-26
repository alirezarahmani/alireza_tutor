<?php class HelloworldController extends AppController {
	var $uses = array('Helloworld');

//////////////////////////////////////////
public function beforeFilter() {
	parent::beforeFilter();
	$this->Auth->allow('register'); // Letting users register themselves
	$this->Auth->allow('login');	
}
//////////////////////////////////////////
public function login() {
	
   		if (!$this->request->is('post')) {
		if ($this->Auth->login()) {
		$my=$this->request->data;
		$this->redirect($this->Auth->redirect(array('controller'=>'helloworld','actions'=>'index')));
		} else {
		$this->Session->setFlash(__('Invalid username or password, try again'));
		}
		}

}
//////////////////////////////////////////
public function index()
{
	set('msg','hello Dear User, welcome to CakePHP 2.4.6 ');
}
//////////////////////////////////////////
public function logout(){
$this->redirect($this->Auth->logout());
}
/////////////////////////////////////////////
public function register() 
{
	if ($this->request->is('post')) {
	$this->Helloworld->create();
	if ($this->Helloworld->save($this->request->data)) {	
	$this->redirect(array('controller'=>'Helloworld','action' => 'index'));
	$this->Session->setFlash(__('The user has been saved'));

	} else {
	$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
	}
	}

}
////////////////////////////////////////////

}