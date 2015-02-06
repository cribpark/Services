<?php
/**
 * Static content controller.
 *
 * This file will render views from views/pages/
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('AppController', 'Controller');

/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class UsersController extends AppController {

/**
 * This controller does not use a model
 *
 * @var array
 */
	public $uses = array('User', 'Order');

	var $components = array('Auth', 'Session');
    
    public function admin_beforeFilter() {
        $this->Auth->userModel = 'User';
        $this->Auth->authError = 'Did you really think you are allowed to see that?';
        $this->Auth->fields = array('username' => 'username', 'password' => 'password');
        $this->Auth->loginAction = array('controller' => 'users', 'action' => 'admin_index');
        $this->Auth->loginRedirect = array('controller' => 'users', 'action' => 'admin_index');
       // $this->Auth->logoutRedirect = array('controller'=> 'Users');
               
        
        

        //$this->Auth->allow('index', 'contact', 'aboutus', 'howitworks', 'signup');
        //$this->Auth->allow('adduser');
    }
    
    public function admin_logout() {
        return $this->redirect($this->Auth->logout());
    }
	public function admin_login() {

		
		$this->layout = 'admin';
		
		if ($this->request->is('post')){
        	
            //echo $this->request->is(['User']['username']);
            

                if ($this->Auth->login()) {

                
                    return $this->redirect(array('controller'=>'users', 'action'=>'admin_index'));
                	
                }
                else
                 {
                    
                //$this->Session->setFlash(__('Invalid username or password, try again'));
                $this->set('error', 'Invalid username or password, try again' );
                }
                    //echo $this->Auth->login();
                    //echo $this->request->is('post');
        }
	}


	public function admin_index(){
		$this->layout = 'admin';
        
        //$options ['conditions'] = array('Product.size != "" ');
        $options ['order'] = array('Order.created_on  DESC');
        $result = $this->Order->find('all', $options);
        // $results = $this->paginate($result);

        //$data = $this->Paginator->paginate($result);
        $this->set('orders', $result);
                
		
	}


	public function admin_adduser(){

		$this->layout = 'admin';

        if  ($this->request->is('post'))  {

           
          	if  ($this->User->save($this->request->data)) {
               	
            	$this->redirect(array('action'  => 'admin_login'));
            }

            $this->set('user','The  user  could  not  be  saved.  Please,  try  again.');
            
        }
      
    }

    public  function  admin_delete($id){
       
        if  ($this->request->is('get'))  {
        throw  new  MethodNotAllowedException();
        }
        if  ($this->Order->delete($id))  {
       		$this->set("deleted", 'The Product has been deleted');
        return  $this->redirect(array('action'  =>  'admin_index'));
        }
    }

}
