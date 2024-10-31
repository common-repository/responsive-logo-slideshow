<?php
/*
Plugin Name: Responsive Logo Slideshow
Plugin URI: http://opensourcetechnologies.com/
Description: This Plugin shows 10 Logos with links in a nice slideshow.
Version: 1.2
Author: Opensourcetechnologies
Author URI: http://opensourcetechnologies.com/
*/
/* options page */
$options_page = get_option('siteurl') . '/wp-admin/admin.php?page=responsive-logo-slideshow/options.php';
function logoslider_options_page() {
	add_options_page('Responsive Logo Slideshow Options', 'Responsive Logo Slideshow', 10, 'responsive-logo-slideshow/options.php');
}
function logoslider_js() {
    $logoslider_path =  get_bloginfo('wpurl')."/wp-content/plugins/responsive-logo-slideshow/";
	$logosliderscript = "<link rel=\"stylesheet\" href=\"".$logoslider_path."css/logo-slideshow.css\" type=\"text/css\" media=\"screen\"/>
<script type=\"text/javascript\" src=\"".$logoslider_path."scripts/logo-slideshow.js\"></script>
	\n";
	echo($logosliderscript);
}
add_action('wp_head', 'logoslider_js');
add_action('admin_menu', 'logoslider_options_page');
?>
