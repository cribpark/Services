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
class OrdersController extends AppController {

/**
 * This controller does not use a model
 *
 * @var array
 */
	//public $uses = array();

/**
 * Displays a view
 *
 * @return void
 * @throws NotFoundException When the view file could not be found
 *	or MissingViewException in debug mode.
 */

	
/*
	public function beforeFilter() {
		parent::beforeFilter();

		// Change layout for Ajax requests
		if ($this->request->is('ajax')) {
			$this->layout = 'ajax';
		}
	}
*/
	public $uses = array('Order');
	public $helpers = array('Js');
	public $components = array('RequestHandler', 'Email'); 

	public function index() {
		
		if ($this->request->is('post')) {
				// create
			$this->Order->create();
				//var_dump($this->request->data); 
				//var_dump($this->Order->save($this->request->data); exit;
				// attempt to save
			if(!empty($this->request->data)){
				
				if ($this->Order->save($this->request->data)) {
					$from =  $this->request->data['Order']['email'];
					$name =  $this->request->data['Order']['name'];
					$typeofservice =  $this->request->data['Order']['type of service'];
					$address =  $this->request->data['Order']['address'];
					$phone =  $this->request->data['Order']['phone no'];

					
					$message = "Hello"." ".$name.","."\nWe got your service order on Cribpark."."\nOne of our agents is going yo call you soon."."\nThanks for using Cribpark!";
					$this->_sendNewUserMail($from, '', $message);

					$admin_message = "Hello Admin,\n".$name." of ".$address."just ordered for ".$typeofservice."on Cribpark. \n Contact:".$phone."";
					$this->_mailadmin($from, '', $admin_message); 
					
					if($this->request->isAjax()){

						$this->render('success', 'ajax');
					}
						
				}
			}
		}
		
	}
	public function _sendNewUserMail($from=null, $subject=null, $message=null) {
	    
	    $this->Email->to = $from;
	    $this->Email->subject = 'We got your service order!';
	    $this->Email->replyTo = 'enquiries@cribpark.com';
	    $this->Email->from = 'info@cribpark.com';
	    $this->Email->content = $message;
	    $this->Email->send($message);
    }
    public function _mailadmin($from=null, $subject=null, $admin_message=null) {
	    $this->Email->to = 'enquiries@cribpark.com';
	    $this->Email->subject = 'New Service Order!';
	    $this->Email->replyTo = 'enquiries@cribpark.com';
	    $this->Email->from = 'info@cribpark.com';
	    $this->Email->content = $admin_message;
	    $this->Email->send($admin_message);
    }
	
	public  function  admin_delete($id){
       
        if  ($this->request->is('get'))  {
        throw  new  MethodNotAllowedException();
        }
        if  ($this->Order->delete($id))  {
       		$this->set("deleted", 'The Product has been deleted');
        return  $this->redirect(array('controller'=>'users','action'  =>  'admin_index'));
        }
    }

}
