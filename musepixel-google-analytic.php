<?php
/*
Plugin Name: Simple Google Analytics Plugin
Plugin URI: http://musepixel.com
Description: Adds a Google analytics trascking code to the <head> of your theme, by hooking to wp_head.
Author: Nuwan Lasantha
Version: 1.2

function musepixel_google_analytic() { ?>
<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		
		ga('create', 'UA-XXXXXXXX-XX', 'auto');
		ga('send', 'pageview');
		
		</script>
<?php }
add_action( 'wp_head', 'musepixel_google_analytic.php', 10 )

