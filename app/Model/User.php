<?php

App::uses('AppModel', 'Model');

class User extends AppModel {



//public $actsAs = array('Acl' => array('type' => 'requester'));



 
 public  $hasMany = array(
'Lawyer' => array(
'className' => 'Lawyer' , 
'foreignKey' => 'user_id'
	)
  	);



public function beforeSave($options = array())
	{

		if(isset($this->data['User']['password']))
			$this->data['User']['password'] = AuthComponent::password($this->data['User']['password']);

		return true;
	}


    }