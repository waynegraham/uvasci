<?php	 	 get_header(); ?>

<!--CONTENT-->
<div class="rounded content left">
   <div class="rounded_top"><div></div></div>
      <div class="rounded_text">
	  <h3 id="who">Who We Are</h3>
	  
	  
	 <!--BLURB-->
					<div class="rounded blurb">
				   <div class="rounded_top"><div></div></div>
					  <div class="rounded_text">
						<?php	 	 query_posts('page_id=21'); ?>
						<?php	 	 if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
							<?php	 	 the_content(); ?>
						<?php	 	 endwhile; endif; ?>
					  </div>
				   <div class="rounded_bottom"><div>
				   </div>
				   </div>
				</div>
				<!--END_BLURB-->
				
				
	            <br />
	  <h3 id="what">What is scholarly communication?</h3>
	  
	  <!--BLURB-->
	  <div class="rounded blurb">
				   <div class="rounded_top"><div></div></div>
					  <div class="rounded_text">
					  <?php	 	 query_posts('page_id=22'); ?>
						<?php	 	 if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
							<?php	 	 the_content(); ?>
						<?php	 	 endwhile; endif; ?>
					  </div>
				   <div class="rounded_bottom"><div>
				   </div>
				   </div>
		</div>
	  
	  <!--END_BLURB-->
	  
	  </div>
   <div class="rounded_bottom"><div>
   </div>
   </div>
</div>
<!--END_CONTENT-->





<!--SIDEBAR-->
<div class="rounded sidebar right">
   <div class="rounded_top"><div></div></div>
    <div class="rounded_text">
	  <h3 id="topnews">Top news</h3>
	  <div id="wordpress_snippet">
<!--WP-CONTENT--><?php	 	 query_posts('showposts=1'); ?>
<?php	 	 while (have_posts()) : the_post(); ?>
<a href="<?php	 	 the_permalink() ?>" rel="bookmark"><?php	 	 the_title(); ?></a><br />
<?php	 	 the_excerpt(); ?>
<?php	 	 endwhile; ?>

<ul class="bullets">
<?php	 	 query_posts('showposts=3&offset=1'); ?>
<?php	 	 while (have_posts()) : the_post(); ?>
<li>
<a href="<?php	 	 the_permalink() ?>" rel="bookmark">
<?php	 	 the_title(); ?>
</a>
</li>
<?php	 	 endwhile; ?> 
</ul>
    </div>
   
   </div><div class="rounded_bottom"><div>
   </div>
</div>
</div>
<!--END_SIDEBAR-->	



<? include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
