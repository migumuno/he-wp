<?php
function he_register_cpt() {
	$icon = 'dashicons-calendar';
	$supports = array('title', 'editor');
	$capitalized = ucfirst('he_log');
	$plural = $capitalized . "s";
	register_post_type(
		$postName,
		array(
			'labels' => array(
				'name' => __($plural, ROOTS__PLUGIN_DOMAIN),
				'singular_name' => __($capitalized, ROOTS__PLUGIN_DOMAIN),
				'menu_name' => _x($plural, 'admin menu', ROOTS__PLUGIN_DOMAIN),
				'name_admin_bar' => _x($capitalized, 'add new on admin bar', ROOTS__PLUGIN_DOMAIN),
				'add_new' => _x('Add New', $postName, ROOTS__PLUGIN_DOMAIN),
				'add_new_item' => __('Add New ' . $postName, ROOTS__PLUGIN_DOMAIN),
				'new_item' => __('New ' . $capitalized, ROOTS__PLUGIN_DOMAIN),
				'edit_item' => __('Edit ' . $capitalized, ROOTS__PLUGIN_DOMAIN),
				'view_item' => __('View ' . $capitalized, ROOTS__PLUGIN_DOMAIN),
				'all_items' => __('All ' . $plural, ROOTS__PLUGIN_DOMAIN),
				'search_items' => __('Search ' . $plural, ROOTS__PLUGIN_DOMAIN),
				'parent_item_colon' => __('Parent ' . $plural . ':', ROOTS__PLUGIN_DOMAIN),
				'not_found' => __('No ' . $plural . ' found.', ROOTS__PLUGIN_DOMAIN),
				'not_found_in_trash' => __('No ' . $plural . ' found in Trash.', ROOTS__PLUGIN_DOMAIN)
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