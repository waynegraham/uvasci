<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php	 	 language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php	 	 bloginfo('html_type'); ?>; charset=<?php	 	 bloginfo('charset'); ?>" />

<title><?php	 	 if ( is_single() ) {
      wp_title('');
      echo (' | ');
      bloginfo('name');
 
} else if ( is_page() || is_paged() ) {
      bloginfo('name');
      wp_title('|');
 
} else if ( is_author() ) {
      bloginfo('name');
      wp_title('| Archive for ');	  
	  
} else if ( is_archive() ) {
      bloginfo('name');
      echo ('| Archive for ');
      wp_title('');
 
} else if ( is_search() ) {
      bloginfo('name');
      echo (' | Search Results');
 
} else if ( is_404() ) {
      bloginfo('name');
      echo (' | 404 Error (Page Not Found)');
	  
} else if ( is_home() ) {
      bloginfo('name');
 
} else {
      bloginfo('name');
      echo ('| ');
      echo (''.$blog_longd.'');
}
 ?></title>
	
<meta name="generator" content="WordPress <?php	 	 bloginfo('version'); ?>" /> 
<?php	 	 if ( is_single() ) { ?>
<meta name="description" content="<?php	 	 wp_title(''); ?>" />
<meta name="keywords" content="<?php	 	 wp_title(''); ?>" />
<?php	 	 } ?>
<?php	 	 if ( ! is_single() ) { ?>

<?php	 	 wp_head(); ?>
<meta name="description" content="<?php	 	 bloginfo('description'); ?>" />
<meta name="keywords" content="<?php	 	 bloginfo('description'); ?>" />
<?php	 	 } ?>

<link rel="stylesheet" href="/css/style.css" type="text/css" media="screen" />

<link rel="alternate" type="application/rss+xml" title="<?php	 	 bloginfo('name'); ?> RSS Feed" href="<?php	 	 bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php	 	 bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php	 	 bloginfo('pingback_url'); ?>" />

<link rel="shortcut icon" href="/favicon.ico" />
<style>
.ss-choices, .entry ul li.ss-choice-item {
    list-style: none;
    margin: 10px 0;
}
.ss-required-asterisk {
    color: red;
}

.ss-q-help {
    font-size: 12px;
    color:#888;
}
.entry form {
    margin: 10px 0;
}

.entry textarea {
    margin: 10px 0 25px;
}
</style>
</head>

<body<?php	 	 if (is_home()) { ?> id="home"<?php	 	 } else { ?> class="page-<?php	 	 echo $post->post_name; ?> <?php	 	 include($_SERVER['DOCUMENT_ROOT'] . '/includes/body_class.inc.php'); ?>" id="interior"<?php	 	 } ?>>

<div id="wrapper">

	<div class="clearfloat">
		<a id="logo" class="left" href="/" title="Back Home">Scholarly Communication Institute</a>
		<a href="http://www.lib.virginia.edu/"><img src="/images/logo_uva.gif" alt="uva" class="right" /></a>
	</div>

	<div id="masthead" class="clearfloat">
		
		<?php	 	 if (is_home()) { ?>
			<p style="margin-top: 0; margin-bottom: 0;"><img src="/images/tagline.gif" alt="tagline" align="left" /><span class="rounded_text">&nbsp;&nbsp;&nbsp;&nbsp; </span></p>
		
		<?php	 	 } else { ?>
			<ul id="top_nav" class="right">
				<?php	 	 wp_list_pages('sort_column=menu_order&title_li=&exclude=3,4,5,6,20,51&depth=1'); ?>
				<li><a href="/" title="Home">Home</a></li>
			</ul>
		<?php	 	 } ?>
		
	</div>

	<ul id="nav" class="clearfloat">
	<?php	 	 wp_list_pages('sort_column=menu_order&title_li=&include=3,4,5,6&depth=1'); ?>
	</ul>

	<div class="clearfloat">
