<?php

App::uses('AppModel', 'Model');

class Lawyer extends AppModel {



//public $actsAs = array('Acl' => array('type' => 'requester'));


public $belongsTo = array(
'User' => array(
      'className'  => 'User',
      'foreignKey' => 'user_id'
	)
    );


    }