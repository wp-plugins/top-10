<?php
//"top-10-daily.js.php" Display Daily Popular Lists.
Header("content-type: application/x-javascript");

if (!function_exists('add_action')) {
    // bootstrap WordPress
    require_once('wp-bootstrap.php');
}

// Display Top 10 Daily list
function tptn_daily_lists() {
	global $wpdb, $siteurl, $tableposts, $id;

	$is_widget = intval($_GET['widget']);
	
	if($is_widget) {
		$output = tptn_pop_posts('daily=1&is_widget=1');
	} else {
		$output = tptn_pop_posts('daily=1&is_widget=0');
	}
	
	echo "document.write('".$output."')";
}
tptn_daily_lists();
?>
