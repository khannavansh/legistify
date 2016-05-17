<script>

$('#dp').datetimepicker({
    format: 'dd/MM/yyyy hh:mm:ss',  //format: 'yyyy-MM-dd hh:mm:ss' either one works     
    language: 'en',
    pick12HourFormat: true
  });

  </script>
 						<?php echo $this->Form->create('Booking'); ?> 
 						
						<?php foreach( $lawyers as $lawyer ) { ?>
						<div class="col-sm-4 jumbotron">
						 <p>Name: <?php echo $lawyer['Lawyer']['name']; ?></p>
						 <p>Degree: <?php echo $lawyer['Lawyer']['degree']; ?></p>
						 <p>Experience: <?php echo $lawyer['Lawyer']['experience']; ?></p>
						Select Date:
						<input type="date" name="data[Booking][date]>  

						      
						<?php echo $this->Form->input('lawyer_id' , array('type' => 'hidden' , 'value' => $lawyer['Lawyer']['id'])); ?> 

						<?php echo $this->Form->input('user_id' , array('type' => 'hidden' , 'value' => '')); ?> 
						
						<?php $options = array('face to face' => 'face to face', 'skype/phone' => 'skype/phone');
									echo $this->Form->input('type', array('type'=>'select', 'label'=>'Select what kind of meeting you want', 'options'=>$options, 'default'=>'1')); ?>

									<br />


						    <button type="submit" class="btn btn-default" ><p style="color:black">Book Now</p></button>

						   
						    
<?php $this->Form->end(); ?>

						</div>


<?php } ?>