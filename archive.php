<?php	 	 get_header(); ?>

	<div id="content" class="clearfloat">
	
	<div class="left" id="main">
	<?php	 	 is_tag(); ?>
		<?php	if (have_posts()) : ?>

 	  <?php	 	 $post = $posts[0]; ?>
 	  <?php	 	 /* If this is a category archive */ if (is_category()) { ?>
		<h4 class="pagetitle"><?php	 	 single_cat_title(); ?></h4>
 	  <?php	 	 /* If this is a tag archive */ } elseif( is_tag() ) { ?>
		<h4 class="pagetitle">Tag archive for &#8216;<?php	 	 single_tag_title(); ?>&#8217;</h4>
 	  <?php	 	 /* If this is a daily archive */ } elseif (is_day()) { ?>
		<h4 class="pagetitle">Archive for <?php	 	 the_time('F jS, Y'); ?></h4>
 	  <?php	 	 /* If this is a monthly archive */ } elseif (is_month()) { ?>
		<h4 class="pagetitle">Archive for <?php	 	 the_time('F, Y'); ?></h4>
 	  <?php	 	 /* If this is a yearly archive */ } elseif (is_year()) { ?>
		<h4 class="pagetitle">Archive for <?php	 	 the_time('Y'); ?></h4>
	  <?php	 	 /* If this is an author archive */ } elseif (is_author()) { ?>
		<h4 class="pagetitle">Author Archives</h4>
 	  <?php	 	 /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		<h4 class="pagetitle">News Archives</h4>
 	  <?php	 	 } ?>

		<?php	 	 while (have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php	 	 the_ID(); ?>">
				<h3><a href="<?php	 	 the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php	 	 the_title_attribute(); ?>"><?php	 	 the_title(); ?></a></h3>
				
				<p class="postmetadata">Posted on <?php	 	 the_time('F jS, Y') ?> | Categorized as <?php	 	 the_category(', ') ?><?php	 	 the_tags(' | Tagged as ', ', '); ?> | <?php	 	 comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>
				</p>
				
				<div class="entry">
					<?php	 	 the_excerpt(); ?>
				</div>
			</div>

		<?php	 	 endwhile; ?>

	<div class="clearfloat pagination">
			<div class="left"><?php	 	 next_posts_link('&laquo; Older Entries') ?></div>
			<div class="right"><?php	 	 previous_posts_link('Newer Entries &raquo;') ?></div>
		</div>

	<?php	 	 else : ?>

		<h4 class="center">Not Found</h4>
		<?php	 	 include (TEMPLATEPATH . '/searchform.php'); ?>

	<?php	 	 endif; ?>

	</div>

<?php	 	 get_sidebar(); ?>

</div>

<?php	 	 get_footer(); ?>
