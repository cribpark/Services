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
class HomesController extends AppController {

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
	public $uses = array('Order');

	public $helpers = array('Js');
	public $components = array('RequestHandler', 'Email');

	public function index() {

		if ($this->request->is('post') && !empty($this->request->data)) {

				// create
			$this->Order->create();
			$from =  $this->request->data['Order']['email'];
			//$this->_sendNewUserMail($from, '', 'Hello'); 
			if ($this->Order->save($this->request->data)) {
					if($this->request->isAjax()){
						$this->render('success', 'ajax');
					}
					
			}
		}

	}
	public function _sendNewUserMail($from=null, $subject=null, $message=null) {
	    
	    $this->Email->to = 'ladokunbolaji@gmail.com';
	    $this->Email->subject = 'We got you service order!';
	    $this->Email->replyTo = 'no-reply@me.com';
	    $this->Email->from = 'info@cribpark.com';
	    $this->Email->content = $message;
	    $this->Email->send($message);
    }
	public function admin_index()
	{
		echo 'here';
	}
}
