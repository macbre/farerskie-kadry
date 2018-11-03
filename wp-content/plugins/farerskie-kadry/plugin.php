<?php
/*
Plugin Name: Site Plugin for farerskiekadry.pl
Description: Site specific code changes for farerskiekadry.pl
*/

// crop image compression
add_filter('jpeg_quality', function($arg){
	return 97;
});

// remove Wordpress version
add_filter('the_generator', function() {
	return '';
});
