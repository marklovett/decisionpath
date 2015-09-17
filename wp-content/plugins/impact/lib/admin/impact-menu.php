<?php
add_action( 'admin_menu', 'impact_add_admin_menu' );
function impact_add_admin_menu()
{
	global $menu, $impact_root;
	
	if ( version_compare(get_bloginfo("version"), '2.9', '>=') )
		$menu['31.51'] = array( '', 'manage_options', 'separator-impact', '', 'wp-menu-separator' );
	
	add_menu_page(' Impact', ' Impact', 'manage_options', 'impact', 'impact_template_builder_admin', plugins_url( $impact_root . '/images/impact20.png' ), '31.53');
}

add_action( 'admin_menu', 'impact_add_admin_submenus' );
function impact_add_admin_submenus()
{
	$_impact_template_builder_admin = add_submenu_page('impact', __('Template Builder','impact'), __('Template Builder','impact'), 'manage_options', 'impact', 'impact_template_builder_admin');
	$_impact_hook_boxes_admin = add_submenu_page('impact', __('Impact Hooks','impact'), __('Impact Hooks','impact'), 'manage_options', 'impact-hook-boxes', 'impact_hook_boxes_admin');
	$_impact_nuts_bolts_admin = add_submenu_page('impact', __('Nuts & Bolts','impact'), __('Nuts & Bolts','impact'), 'manage_options', 'impact-nuts-bolts', 'impact_nuts_bolts_admin');
	
	add_action('admin_print_styles-' . $_impact_template_builder_admin, 'impact_template_builder_enqueue');
	add_action('admin_print_styles-' . $_impact_hook_boxes_admin, 'impact_hook_boxes_enqueue');
	add_action('admin_print_styles-' . $_impact_nuts_bolts_admin, 'impact_nuts_bolts_enqueue');
}

add_action( 'admin_init', 'impact_admin_init' );
function impact_admin_init()
{
	global $impact_root;

	wp_register_style( 'impact_admin_css', plugins_url( $impact_root . '/css/impact-admin.css' ) );
	wp_register_style( 'impact_jquery_ui_css', plugins_url( $impact_root . '/css/impact-ui/jquery-ui-1.7.3.custom.css' ) );
	
	wp_register_script( 'impact_jquery_ui', plugins_url( $impact_root . '/js/impact-jquery-ui.js' ) );
	wp_register_script( 'impact_admin_js', plugins_url( $impact_root . '/js/impact-admin.js' ) );
	wp_register_script( 'impact_template_builder_js', plugins_url( $impact_root . '/js/impact-template-builder.js' ) );
	wp_register_script( 'jscolor', plugins_url( $impact_root . '/js/jscolor/jscolor.js' ) );
}

function impact_nuts_bolts_enqueue()
{
	wp_enqueue_style( 'impact_admin_css' );
	
	wp_enqueue_script( 'impact_admin_js' );
}

function impact_hook_boxes_enqueue()
{
	wp_enqueue_style( 'impact_admin_css' );
	
	wp_enqueue_script( 'impact_admin_js' );
}

function impact_template_builder_enqueue()
{
	wp_enqueue_style( 'impact_admin_css' );
	wp_enqueue_style( 'impact_jquery_ui_css' );
	
	wp_enqueue_script( 'impact_jquery_ui' );
	wp_enqueue_script( 'impact_admin_js' );
	wp_enqueue_script( 'impact_template_builder_js' );
	wp_enqueue_script( 'jscolor' );
}

//end lib/admin/impact-menu.php