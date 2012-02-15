<?php	 	
/*
Template Name: news
*/
?>

<?php	 	 get_header(); ?>

	<div id="content" class="clearfloat">
	
	<div class="left" id="main">
	
      <?php	 	
		$page = (get_query_var('paged')) ? get_query_var('paged') : 1;
		query_posts("paged=$page");
	  ?>
	
		<?php	 	 is_tag(); ?>
		<?php	 	 if (have_posts()) : ?>

 	  <?php	 	 $post = $posts[0]; ?>
 	  <h4>News</h4>

		<?php	 	 while (have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php	 	 the_ID(); ?>">
				<h3><a href="<?php	 	 the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php	 	 the_title_attribute(); ?>"><?php	 	 the_title(); ?></a></h3>
				
				<p class="postmetadata">Posted on <?php	 	 the_time('F jS, Y') ?> | Categorized as <?php	 	 the_category(', ') ?><?php	 	 the_tags(' | Tagged as ', ', '); ?> | <?php	 	 comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>
				</p>
				
				<div class="entry">
					<?php	 	 the_content('{More}'); ?>
				</div>
			</div>

		<?php	 	 endwhile; ?>

	<div class="clearfloat pagination">
			<div class="left"><?php	 	 next_posts_link('&laquo; Older Entries') ?></div>
			<div class="right"><?php	 	 previous_posts_link('Newer Entries &raquo;') ?></div>
		</div>

	<?php	 	 else : ?>

		<h4 class="center">Not Found</h4>
		<?php	 	 include ('searchform.php'); ?>

	<?php	 	 endif; ?>

	</div>

<?php	 	 get_sidebar(); ?>

</div>

<?php	 	 get_footer(); ?>
