<?php	

{

	$url = $_SERVER['REQUEST_URI'];
	$url = split('/|\?|&', $url);

	for($i = 0; $i < count($url); $i++) {
		$element = $url[$i];
			
		if(strpos($element,'=') !== false) {
			list($field, $value) = split('=', $element);
			if($value && !in_array($field, $ignore_fields)) {
				$classes[] = $field;
				unset($element);
			}
		}
			
		if(strlen($element)) {
			$element = str_replace('.php', '', $element);
			
			$base[] = $element;
			$classes[] = join('_', $base);
		}
	}
	$out = join(' ', $classes);

	print $out;

}

?>
