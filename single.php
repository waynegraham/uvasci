<?php	 	 get_header(); ?>

	<div id="content" class="clearfloat">
	
	<div class="left" id="main">

	<?php	 	 if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="post" id="post-<?php	 	 the_ID(); ?>">
				<h3><?php	 	 the_title(); ?></h3>
				
				<p class="postmetadata">Posted on <?php	 	 the_time('F jS, Y') ?> | Categorized as <?php	 	 the_category(', ') ?><?php	 	 the_tags(' | Tagged as ', ', '); ?>
				</p>
				
				<div class="entry">
					<?php	 	 the_content('Read the rest of this entry &raquo;'); ?>
				</div>
			</div>

	<?php	 	 comments_template(); ?>

	<?php	 	 endwhile; else: ?>

		<p>Sorry, no posts matched your criteria.</p>

<?php	 	 endif; ?>

	</div>

<?php	 	 get_sidebar(); ?>

</div>

<?php	 	 get_footer(); ?>
