<?php foreach( $bookings as $booking ) { ?>
<div class="col-sm-4 jumbotron">

<p>Date: <?php echo $booking['Booking']['date']; ?> </p>
<p>Type: <?php echo $booking['Booking']['type']; ?></p>

<?php echo $this->Form->create('Booking'); ?>

<?php $options = array('confirm' => 'confirm', 'declined' => 'cancel'); ?>
<?php echo $this->Form->input('select' ,array('type' => 'select' , 'options' => $options,'label' => 'Confirm/Cancel' )); ?> 

<button  type="submit" >Submit</button>

<?php $this->Form->end(); ?>


			</div>
<?php } ?>