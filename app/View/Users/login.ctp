<section id="form"><!--form-->
		
			<div class="row">
			<div class="col-sm-3" ></div>
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Login to your account</h2>

						<?php echo $this->Form->create('User') ?> 


                            
							<?php echo $this->Form->input('username' ,array( 'type'=>'text' , 'placeholder'=>'Username' ,'required' => 'true','label' => 'Username' , 'id' => 'username')); ?>
							<?php echo $this->Form->input('password',array( 'type'=>'password' , 'placeholder'=>'Password' ,'required' => 'true','label' => 'Password'  )); ?>
							<?php echo $this->Html->link('Signup' , array('controller' => 'Users' , 'action' => 'signup')) ?>
							<br />
							

                            
														

						    <button type="submit" class="btn btn-default" ><p style="color:black">Login</p></button>
						    
						</form>
						<div class="col-sm-4" ></div>

					</div><!--/login form-->
				</div>

				
				</div>
			</div>
		</div>
	</section><!--/form-->
	
	
