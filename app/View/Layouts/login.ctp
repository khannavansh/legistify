<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
    
    <!-- Load jQuery JS -->
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <!-- Load jQuery UI Main JS  -->
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
	<?php echo $this->Html->charset(); ?>
 <?php 	$title_for_layout = "Legistify"; ?>
	<title>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
		//CSS
		echo $this->Html->css('datepicker');
		
		 
		//JavaScript
	
		echo $this->Html->script('datepicker');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
		//echo $this->fetch('img');
		echo $this->Html->css('bootstrap.min.css');
	 	echo $this->Html->css('font-awesome.min.css');
		echo $this->Html->css('prettyPhoto.css');
		echo $this->Html->css('animate.css');
        echo $this->Html->css('main.css');
        echo $this->Html->css('responsive.css');
        echo $this->Html->script('bootstrap.min.js');
        echo $this->Html->script('jquery.js');
        echo $this->Html->script('jquery.scrollUp.min.js.js');
        echo $this->Html->script('price-range.js');
        echo $this->Html->script('jquery.prettyPhoto.js');
        echo $this->Html->script('main.js');
	?>

<div id="fb-root"></div>
 <script>
(function(d, s, id) 
{
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}
(document, 'script', 'facebook-jssdk'));
</script>
</head>

<body>
<?php echo $this->Html->link('Logout',array('controller'=>'Users','action'=>'logout')); ?>	
<?php echo $this->fetch('content'); ?>

</body>