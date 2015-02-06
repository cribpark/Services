<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User
 *
 * @author Ladokun
 */
class User extends AppModel {
    //put your code here
    
    
    public function beforeSave($options = array()) {
       // parent::beforeSave($options);
        
        if(isset ($this->data[$this->alias]['password']));
         {
                $this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);

                return true;
          }
    }
    
    
   
   /* 
    public  $validate  =  array(
                'login'  =>  array(
                'alphaNumeric'  =>  array(
                'rule' =>  '',
                'required'  =>  true,
                'message'    =>  'Alphabets  and  numbers  only'
                ),
                ),
                'password'  =>  array(
                'rule'        =>  array('minLength',  '8'),
                'message'  =>  'Minimum  8  characters  long',
                'allowempty'=> false
                
                ),
                'username'  =>  array(
                'allowempty'=> false,
                'rule'=>  'alphaNumeric'
                 
                )
                );
    
    */
}

?>
