<section id="form"><!--form-->
		<div class="container">
			<div class="row">


		<div class="col-sm-6">
		</div>
				
<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>New User Signup!</h2>
						<?php echo $this->Form->create('User'); ?> 

							 <?php echo $this->Form->input('username',array( 'type'=>'text' , 'placeholder'=>'Username' ,'required' => 'true', 'label' => 'Username' )); ?>

							 <?php echo $this->Form->input('email' ,array( 'type'=>'email' , 'placeholder' => 'youremail@something.com')); ?>

							 <?php echo $this->Form->input('password' ,array( 'type'=>'password' , 'placeholder'=>'Password' ,'required' => 'true','label' => 'Password'  )); ?>
					         <?php echo $this->Form->input('group_id' ,array( 'type'=>'hidden' , 'value' => '1' )); ?>

					         <?php $options = array(1 => 'Lawyer', 2 => 'Client');
									echo $this->Form->input('type', array('type'=>'select', 'label'=>'Select if you are Lawyer/Client', 'options'=>$options, 'default'=>'1')); ?>

									<br />

					         <?php echo $this->Html->link('login' , array('controller' => 'Users' , 'action' => 'login')) ?>

					         

							<button type="submit" class="btn btn-default"><p style="color:black">Signup</p></button>
						</form>
					</div><!--/sign up form-->
</div>
</div>
</div>
</section>	`