<?php	 	 get_header(); ?>
  
<?php	 	
	if($post->ID) { // making sure stuff exists - probably not necessary for our purposes, but we'll make sure
		
		if($post->post_parent) { // page is a child
		
			// get this party started
                            
			$parent = get_post($post->post_parent);
						   
			if($parent->post_parent) { // if page is a grandchild
				
				$grandparent = get_post($parent->post_parent);
				
				if($grandparent->post_parent) { // if page is a greatgrandchild
					
					// keep secondary nav
					$secondarynav = wp_list_pages('sort_column=menu_order&title_li=&depth=1&child_of='.$grandparent->post_parent.'&echo=0');
					// show the tertiary nav [siblings/grandchildren/greatgrandchildren]
					$tertiarynav = wp_list_pages('exclude=297&sort_column=menu_order&title_li=&child_of='.$grandparent->ID.'&echo=0');
				}
				
				else { // no greatgrandchildren around
				
					// keep secondary nav
					$secondarynav = wp_list_pages('sort_column=menu_order&title_li=&depth=1&child_of='.$parent->post_parent.'&echo=0');
					// show the tertiary nav [siblings/grandchildren]
					$tertiarynav = wp_list_pages('exclude=297&sort_column=menu_order&title_li=&child_of='.$parent->ID.'&echo=0');
				}
			}
			
			else { // page off of secondary nav has children
				
				// keep secondary nav
				$secondarynav = wp_list_pages('sort_column=menu_order&title_li=&depth=1&child_of='.$post->post_parent.'&echo=0');
				// show tertiary nav [children/grandchildren]
				$tertiarynav = wp_list_pages('exclude=297&sort_column=menu_order&title_li=&child_of='.$post->ID.'&echo=0');
			}
		}
		
		else {
			
			// nothing exciting is happening 
			
			if(wp_list_pages("child_of=".$post->ID."&echo=0")) { // if page off of main nav has children
				
				// show secondary nav [children]
				$secondarynav = wp_list_pages('sort_column=menu_order&title_li=&depth=1&child_of='.$post->ID.'&echo=0');
			}
                           
		}
	} 
?>

<?php	 	 $temp_query = $wp_query; ?>
<?php	 	 query_posts('pagename=/sidebars/'.$post->post_name.'-sidebar'); ?>
<?php	 	
	if ( have_posts() ) {
		$has_sidebar = '';
	}
?>
<?php	 	 $wp_query = $temp_query; ?>
	

 <?php	 	
	if ($secondarynav) { ?>
		<!-- <ul id="subnav" class="clearfloat"><?php	 	 echo $secondarynav; ?></ul> -->
	<?php	 	
	}
 ?>
  

<div id="content" class="clearfloat">
	<?php	 	
	if ($tertiarynav || isset($has_sidebar)) { ?>
		<div class="left" id="main">
		<?php	 	
		}
	?>  
		<?php	 	 if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="post" id="post-<?php	 	 the_ID(); ?>">
				<h4><?php	 	 the_title(); ?></h4>
				<div class="entry">
					<?php	 	 the_content(); ?>
				</div>
			</div><!--END POST-->
		<?php	 	 endwhile; endif; ?>
		
	
	<?php	 	
	if ($tertiarynav || isset($has_sidebar)) { ?>
		</div> <!--/MAIN-->
		<!--SIDEBAR-->
		<div class="rounded sidebar right">
		   <div class="rounded_top"><div></div></div>
			<div class="rounded_text">
			
				<?php	 	 if ($tertiarynav) { ?>
				   <ul id="tertiarynav" class="bullets">
					<?php	 	 echo $tertiarynav; ?>
				   </ul>
				<?php	 	 } ?>
			   
				<?php	 	 query_posts('pagename=/sidebars/'.$post->post_name.'-sidebar'); ?>
				<?php	 	 while ( have_posts() ) : the_post(); ?>
					<?php	 	 the_content(); ?>
				<?php	 	 endwhile;?>
				 
			</div>
		   <div class="rounded_bottom"><div>
		   </div>
		   </div>
		</div>
		<!--END_SIDEBAR-->
	<?php	 	
	}
?>
		 
</div><!--END CONTENT--> 
  
<?php	 	 get_footer(); ?>