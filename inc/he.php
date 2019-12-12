<?php
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
?>