<?php

App::uses('AppController' , 'Controller');


class UsersController extends AppController
{




public function index()
  {
   $this->redirect(array( 'controller' => 'users' , 'action' => 'login'));
  } 

public function login()
  {
   
    
    $this->layout = 'login';  

    if ($this->request->is('post')) {
        // Important: Use login() without arguments! See warning below.
        if ($this->Auth->login()) {

        	$user = $this->User->find('all', array(
			'conditions' => array('username' => $this->request->data['User']['username']),
			'recursive'  => -1,
			'fields' => array('type' ),
		    ));

		    if($user[0]['User']['type'] == 1)
		    {          
            	return $this->redirect(array('controller' => 'users', 'action' => 'lawyerLogin'));
            }
            else
            {
            return $this->redirect(array('controller' => 'users', 'action' => 'clientLogin'));	
            }
            


           
        }
      else
      {
      return $this->redirect(array('controller' => 'users', 'action' => 'login'));
      }
      
    }

                 }


                 public function logout()
                 {
                 	$this->Auth->logout();
                 	 $this->redirect(array('controller' => 'users' , 'action' => 'login'));
                 }


                 public function lawyerLogin()
                 {

                    $this->layout ='login';
                 	$this->loadModel('Booking');
                 	$this->loadModel('Lawyer');


                 	$bookings = $this->Booking->find('all', array(
                 	'conditions' => array('lawyer_id' => $this->Lawyer->find('all', array(
                 	'conditions' => array('user_id' => $this->Auth->user('id')),
					'recursive'  => -1,
					'fields' => array('id'),
				    ))[0]['Lawyer']['id']),            		
					'recursive'  => -1,
					'fields' => array('date' ,'type' , 'id'),
				    ));

				    $this->set('bookings' , $bookings);
				    

				    if(!empty($this->request->data))
				    {
				    $this->Booking->id = $this->Booking->find('all', array(
                 	'conditions' => array('lawyer_id' => $this->Lawyer->find('all', array(
                 	'conditions' => array('user_id' => $this->Auth->user('id')),
					'recursive'  => -1,
					'fields' => array('id'),
				    ))[0]['Lawyer']['id']),
					'recursive'  => -1,
					'fields' => array('id'),
				    ))[0]['Booking']['id'];

				    $this->Booking->saveField('status', $this->request->data['Booking']['select']);
				    }



}


                 public function clientLogin()
                 {
                 	$this->layout ='login';
                 	$this->loadModel('Booking');

                 	$this->layout ='login';
                 	$this->loadModel('Lawyer');

                 	$lawyers = $this->Lawyer->find('all', array(
					'recursive'  => -1,
					'fields' => array('Lawyer.id' ,'Lawyer.name' , 'Lawyer.experience', 'Lawyer.degree', 'Lawyer.user_id'),
				    ));

		$this->set('lawyers'  , $lawyers);

	
if(!empty($this->request->data)){

	

	$this->request->data['Booking']['user_id'] = $this->Auth->user('id');
	
    $this->Booking->saveAll($this->request->data);

}
                 }





   		public function signup(){

 $this->layout = 'login';
 $this->loadModel('Lawyer');

if(!empty($this->request->data)){
  $this->User->save($this->request->data);
  if($this->request->data['User']['type'] == 1)
  {

  	$data = array(
  		'name' => $this->request->data['User']['username'],
  		'user_id' => $this->User->id,
  		'degree' => 'LLB',
  		'experience' => '2+'
  		);

  	$this->Lawyer->save($data);
  }


$this->redirect(array('controller' => 'users' , 'action' => 'login'));
}
}
}
