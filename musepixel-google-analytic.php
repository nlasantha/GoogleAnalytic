<?php
/*
Plugin Name: Simple Google Analytics Plugin
Plugin URI: http://musepixel.com
Description: Adds a Google analytics trascking code to the <head> of your theme, by hooking to wp_head.
Author: Nuwan Lasantha
Version: 1.2

function wpmudev_google_analytics() { ?>

<?php }
add_action( 'wp_head', 'wpmudev_google_analytics', 10 )