<?php 
namespace App\Controller;
class HelloworldController extends AppController {

 var $uses = array('helloworld', 'User'); 
public function beforeFilter(){
	$this->Auth->allow(array('register','login'));
	}
/////////////////////////////////////////////////////////	
 public function index() {
        $this->set('msg','Hello world to cakePHP 3.0');
    }
/////////////////////////////////////////////////////////
public function login() {
    if ($this->request->is('post')) {
        if ($this->Auth->login()) {
            return $this->redirect($this->Auth->redirectUrl());
        } else {
            $this->Session->setFlash(__('Username or password is incorrect'), 'default', array(), 'auth');
        }
    }
}	
/////////////////////////////////////////////////////////
public function register() {
        $HW = $this->Helloworlds->newEntity($this->request->data);
		$this->set('helloworld', $HW);
        if ($this->request->is('post')) {
            if ($this->Helloworlds->save($HW)) {
                $this->Session->setFlash(__('Your article has been saved.'));
                return $this->redirect(['controller'=>'helloworld','action' => 'index']);
            }
            $this->Session->setFlash(__('Unable to add new user.'));
        }
        
   }
///////////////////////////////////////////////////////////	
public function logout() {
    return $this->redirect($this->Auth->logout());
}
///////////////////////////////////////////////////////////
	
}