<!--SIDEBAR-->
<div class="rounded sidebar right">
	<div class="rounded_top">
		<div></div>
	</div>
	<div class="rounded_text">
			
				<?php	 	 if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
	
					<h5>Archives</h5>
					<ul class="bullets">
					<?php	 	 wp_get_archives('type=monthly'); ?>
					</ul>
	
					<h5>Categories</h5>
					<ul class="bullets">
					<?php	 	 wp_list_categories('title_li='); ?>
					</ul>
					
					<h5>Search</h5>
					<?php	 	 include ( 'searchform.php'); ?>

				<?php	 	 endif; ?>
				 
	</div>
	<div class="rounded_bottom">
		<div></div>
	</div>
</div>
<!--END_SIDEBAR-->

