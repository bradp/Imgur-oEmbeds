<?php
/*
Plugin Name: Imgur oEmbeds
Description: Simply paste in an Imgur URL, and it will display the image. 
Version: 1.0
Author: Brad Parbs
Author URI: http://bradparbs.com/
*/

wp_oembed_add_provider('#https?://i.imgur.com.*#i','http://api.imgur.com/oembed?url=/');