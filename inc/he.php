<?php
if (!function_exists('write_log')) 
{
    function write_log($log)
    {
        if (true === WP_DEBUG) {
            if (is_array($log) || is_object($log)) {
                error_log(print_r($log, true));
            } else {
                error_log($log);
            }
        }
    }
}

function he_register_cpt() {
	$postName = 'he_log';
	$icon = 'dashicons-calendar';
	$supports = array('title', 'editor');
	$capitalized = ucfirst($postName);
	$plural = $capitalized . "s";
	register_post_type(
		$postName,
		array(
			'labels' => array(
				'name' => __($plural, HE__PLUGIN_DOMAIN),
				'singular_name' => __($capitalized, HE__PLUGIN_DOMAIN),
				'menu_name' => _x($plural, 'admin menu', HE__PLUGIN_DOMAIN),
				'name_admin_bar' => _x($capitalized, 'add new on admin bar', HE__PLUGIN_DOMAIN),
				'add_new' => _x('Add New', $postName, HE__PLUGIN_DOMAIN),
				'add_new_item' => __('Add New ' . $postName, HE__PLUGIN_DOMAIN),
				'new_item' => __('New ' . $capitalized, HE__PLUGIN_DOMAIN),
				'edit_item' => __('Edit ' . $capitalized, HE__PLUGIN_DOMAIN),
				'view_item' => __('View ' . $capitalized, HE__PLUGIN_DOMAIN),
				'all_items' => __('All ' . $plural, HE__PLUGIN_DOMAIN),
				'search_items' => __('Search ' . $plural, HE__PLUGIN_DOMAIN),
				'parent_item_colon' => __('Parent ' . $plural . ':', HE__PLUGIN_DOMAIN),
				'not_found' => __('No ' . $plural . ' found.', HE__PLUGIN_DOMAIN),
				'not_found_in_trash' => __('No ' . $plural . ' found in Trash.', HE__PLUGIN_DOMAIN)
			),
			'public' => true,
			'show_in_rest' => true,
			'has_archive' => false,
			'rewrite' => array('slug' => $postName . 's'),
			'menu_icon' => $icon,
			'supports' => $supports
		)
	);
}
add_action('init', 'he_register_cpt');

function create_he_post($lat=null, $lng=null) {
	$content = '<p>';
	$log = $_SERVER['REMOTE_ADDR'] . ': ';

	if(isset($lat)) {
		$content .= 'LATITUD: ' . $lat . '<br>';
		$log .= 'LATITUD: ' . $lat . ' / ';
	}

	if(isset($lng)) {
		$content .= 'LONGITUD: ' . $lng . '<br>';
		$log .= 'LONGITUD: ' . $lng;
	}

	write_log($log);

	foreach ($_SERVER as $key => $value) {
		$content .= $key . ' => ' . $value . '<br>';
	}
	$content .= '/<p>';

	$postarr = array(
		'post_type'		=>	'he_log',
		'post_title'	=>	$_SERVER['REMOTE_ADDR'],
		'post_content'	=>	$content,
		'post_status'	=>	'publish'
	);

	$err = wp_insert_post($postarr, true);
	if( is_wp_error($err) ) {
		print_r($err);
	}
}

function he_register_ip() {
	if(is_page()) {
		create_he_post();
	}
}
add_action('init', 'he_register_ip');

function delete_he_posts() {
	$args = array(
		'post_type'	=>	'he_log',
		'posts_per_page'	=>	-1
	);

	$q = new WP_Query($args);

	while($q->have_posts()) {
		$q->the_post();
		wp_delete_post(get_the_ID(), true);
	}
}
remove_action('init', 'delete_he_posts');
// add_action('init', 'delete_he_posts');

function send_he_geo(){
	// Check parameters
	create_he_post($_POST['lat'], $_POST['long']);
}
add_action('wp_ajax_nopriv_send_he_geo', 'send_he_geo');
add_action('wp_ajax_send_he_geo', 'send_he_geo');
?>