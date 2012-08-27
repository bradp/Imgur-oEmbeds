<?php
/*
Plugin Name: Imgur oEmbeds
Description: Simply paste in an Imgur URL, and it will display the image. 
Version: 1.0
Author: Brad Parbs
Author URI: http://bradparbs.com/
*/

add_filter('oembed_providers','bp_imgur_oembeds');
function bp_imgur_oembeds($a) {
	$a['#https?://i.imgur.com.*#i'] = array( 'http://api.imgur.com/oembed?url=/', true);
	return $a;
}
