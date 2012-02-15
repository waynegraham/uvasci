<?php	 	

// Error reporting settings
error_reporting(E_ERROR | E_WARNING | E_PARSE);
ini_set('display_errors', 0);

// Determine which server the site is currently in
if(substr($_SERVER['HTTP_HOST'],0,4) == 'test') {
	$which_server = 'test';
} else {
	$which_server = 'live';
}

/* The next two lines of code are to fix the $_SERVER['DOCUMENT_ROOT'] environment 
   variable that is messed up by an Apache server cluster having multiple document roots */
preg_match("/^(.+)".str_replace('/','\\/',$_SERVER['PHP_SELF'])."$/",realpath($_SERVER['SCRIPT_FILENAME']),$matches);
$_SERVER['DOCUMENT_ROOT'] = $matches[1]; // no trailing slash
$regexp_document_root = str_replace('.','\.',str_replace('/','\/',$_SERVER['DOCUMENT_ROOT']));


// Installation root variables holding paths for server directory and url
$_SERVER['DOCUMENT_ROOT'] = dirname(dirname(__FILE__));
preg_match('/^('.$regexp_document_root.')(\/?[^\/]*\/?)/',$_SERVER['DOCUMENT_ROOT'],$matches);
// Use $installation_root_url as a prefix for href and src paths in includes
$installation_root_url = $matches[2].'/';


// Global include directories
$global_include_dir = dirname(__FILE__); // no trailing slash
$global_include_url = $installation_root_url.'includes/';


// Add local and global include directories to include_path
ini_set('include_path','.:'.(is_dir($global_include_dir) ? $global_include_dir.':' : '').str_replace('.:','',ini_get('include_path')));


?>