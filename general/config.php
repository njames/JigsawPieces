<?php
// this is a neat trick to reuse items in your returned config array
class config {
	public static $company = "Square Cloud Pty Ltd"; 
	public static $established = "2011"; 
}

return [
	// set this so that you can use $page->getPath()
	'baseUrl' => '',
	// set this to true in your config.production.php
	'production' => false,
	//
	'collections' => [],

	// set your company name
	'company' => 'Square Cloud Pty Ltd',

	// from the jigsaw doco at http://jigsaw.tighten.co/docs/helper-methods/
	// a nice way to ensure that in a menu the current page is highlighted
	'selected' => function ($page, $section) {
		return str_contains($page->getPath(), $section) ? 'selected' : '';
	},

    // a nice copyright message so you dont have to change the year every year
    'copyright' => function ( ) {
    	return "&copy; Copyright " . config::$company . ' ' . config::$established . ' - ' . date('Y');
    }
]; 