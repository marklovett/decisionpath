<?php

function hierarchical_submenu($post) {
    $top_post = $post;
    // If the post has ancestors, get its ultimate parent and make that the top post
    if ($post->post_parent && $post->ancestors) {
        $top_post = get_post(end($post->ancestors));
    }
    // Always start traversing from the top of the tree
    return hierarchical_submenu_get_children($top_post, $post);
}

function hierarchical_submenu_get_children($post, $current_page) {
    $menu = '';
    // Get all immediate children of this page
    $children = get_pages('child_of=' . $post->ID . '&parent=' . $post->ID . '&sort_column=menu_order&sort_order=ASC');
    if ($children) {
        $menu = "\n<ul>\n";
        foreach ($children as $child) {
            // If the child is the viewed page or one of its ancestors, highlight it
            if (in_array($child->ID, get_post_ancestors($current_page)) || ($child->ID == $current_page->ID)) {
                $menu .= '<li class="current"><a href="' . get_permalink($child) . '" class="current"><strong>' . $child->post_title . '</strong></a>';
            } else {
                $menu .= '<li><a href="' . get_permalink($child) . '">' . $child->post_title . '</a>';
            }
            // If the page has children and is the viewed page or one of its ancestors, get its children
            if (get_children($child->ID) && (in_array($child->ID, get_post_ancestors($current_page)) || ($child->ID == $current_page->ID))) {
                $menu .= hierarchical_submenu_get_children($child, $current_page);
            }
            $menu .= "</li>\n";
        }
        $menu .= "</ul>\n";
    }
    return $menu;
}



function custom_trim_excerpt($text) { // Fakes an excerpt if needed
	global $post;
	if ( '' == $text ) {
		$text = get_the_content('');
		$text = apply_filters('the_content', $text);
		$text = str_replace(']]>', ']]>', $text);
		$text = strip_tags($text);
		$excerpt_length = 20;
		$words = explode(' ', $text, $excerpt_length + 1);
		if (count($words) > $excerpt_length) {
			array_pop($words);
			array_push($words, '');
			$text = implode(' ', $words);
		}
	}
	return $text;
}
add_filter('get_the_excerpt', 'custom_trim_excerpt');

	// Load jQuery
	if ( !is_admin() ) {
	   wp_deregister_script('jquery');
	   wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"), false);
	   wp_enqueue_script('jquery');
	}
	
	// Clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
		remove_action('wp_head', 'feed_links_extra', 3);
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');
    
    if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'Sidebar Widgets',
    		'id'   => 'sidebar-widgets',
    		'description'   => 'These are widgets for the sidebar.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
    }

	// Add custom Matrix logo for the login screen
	function my_custom_login_logo() {
		echo '<style type="text/css">
			h1 a { background-image:url('.get_bloginfo('template_directory').'/images/matrix-login.gif) !important; height: 88px; }
		</style>';
	}
	
	add_action('login_head', 'my_custom_login_logo');
	
	// Add custom Matrix footer for WP dashboard
	function remove_footer_admin () {
		echo "Created by Matrix Group International Inc. &reg;";
	} 
	
	add_filter('admin_footer_text', 'remove_footer_admin');
	
	// Options panel
	
	$themename = "Matrix";
	$shortname = "mt";
	$categories = get_categories('hide_empty=0&orderby=name');
	$wp_cats = array();
	foreach ($categories as $category_list ) {
		   $wp_cats[$category_list->cat_ID] = $category_list->cat_name;
	}
	array_unshift($wp_cats, "Choose a category");
	
	$options = array (
	
	array( "name" => $themename." Options",
		"type" => "title"),
	
	array( "name" => "General",
		"type" => "section"),
	array( "type" => "open"),
		
	array( "name" => "Google Analytics Code",
		"desc" => "You can paste your Google Analytics or other tracking code in this box. This will be automatically added to the footer.",
		"id" => $shortname."_ga_code",
		"type" => "textarea",
		"std" => ""),	
	
	array( "name" => "Feedburner URL",
		"desc" => "Paste your Feedburner URL here and it will automatically be added to the head.",
		"id" => $shortname."_feedburner",
		"type" => "text",
		"std" => get_bloginfo('rss2_url')),
	
	array( "type" => "close")
	
	);

	function mytheme_add_admin() {
	
	global $themename, $shortname, $options;
	
	if ( $_GET['page'] == basename(__FILE__) ) {
	
		if ( 'save' == $_REQUEST['action'] ) {
	
			foreach ($options as $value) {
			update_option( $value['id'], $_REQUEST[ $value['id'] ] ); }
	
	foreach ($options as $value) {
		if( isset( $_REQUEST[ $value['id'] ] ) ) { update_option( $value['id'], $_REQUEST[ $value['id'] ]  ); } else { delete_option( $value['id'] ); } }
	
		header("Location: admin.php?page=functions.php&saved=true");
	die;
	
	}
	else if( 'reset' == $_REQUEST['action'] ) {
	
		foreach ($options as $value) {
			delete_option( $value['id'] ); }
	
		header("Location: admin.php?page=functions.php&reset=true");
	die;
	
	}
	}
	
	add_menu_page($themename, $themename, 'administrator', basename(__FILE__), 'mytheme_admin');
	}
	
	function mytheme_add_init() {
	$file_dir=get_bloginfo('template_directory');
	wp_enqueue_style("functions", $file_dir."/functions/functions.css", false, "1.0", "all");
	}
	
	function mytheme_admin() {

	global $themename, $shortname, $options;
	$i=0;
	
	if ( $_REQUEST['saved'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' settings saved.</strong></p></div>';
	if ( $_REQUEST['reset'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' settings reset.</strong></p></div>';


	if (function_exists('add_theme_support')) {
		add_theme_support('menus');
	}



	?>
	<div class="wrap rm_wrap">
	<h2><?php echo $themename; ?> Settings</h2>
	
	<div class="rm_opts">
	<form method="post">

	<?php foreach ($options as $value) {
	switch ( $value['type'] ) {

	
	case "open":
	?>
	
	<?php break;
	
	case "close":
	?>
	
	</div>
	</div>
	<br />
	
	<?php break;
	
	case "title":
	?>
	
	<?php break;
	
	case 'text':
	?>
	
	<div class="rm_input rm_text">
		<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
		<input name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" value="<?php if ( get_settings( $value['id'] ) != "") { echo stripslashes(get_settings( $value['id'])  ); } else { echo $value['std']; } ?>" />
	 <small><?php echo $value['desc']; ?></small><div class="clearfix"></div>
	
	 </div>
	<?php
	break;
	
	case 'textarea':
	?>
	
	<div class="rm_input rm_textarea">
		<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
		<textarea name="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" cols="" rows=""><?php if ( get_settings( $value['id'] ) != "") { echo stripslashes(get_settings( $value['id']) ); } else { echo $value['std']; } ?></textarea>
	 <small><?php echo $value['desc']; ?></small><div class="clearfix"></div>
	
	 </div>
	
	<?php
	break;
	
	case 'select':
	?>
	
	<div class="rm_input rm_select">
		<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
	
	<select name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>">
	<?php foreach ($value['options'] as $option) { ?>
			<option <?php if (get_settings( $value['id'] ) == $option) { echo 'selected="selected"'; } ?>><?php echo $option; ?></option><?php } ?>
	</select>
	
		<small><?php echo $value['desc']; ?></small><div class="clearfix"></div>
	</div>
	<?php
	break;
	
	case "checkbox":
	?>
	
	<div class="rm_input rm_checkbox">
		<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
	
	<?php if(get_option($value['id'])){ $checked = "checked=\"checked\""; }else{ $checked = "";} ?>
	<input type="checkbox" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" value="true" <?php echo $checked; ?> />
	
		<small><?php echo $value['desc']; ?></small><div class="clearfix"></div>
	 </div>
	 
	<?php break;
	case "section":
	
	$i++;
	
	?>
	
	<div class="rm_section">
	<div class="rm_title"><h3><?php echo $value['name']; ?></h3><span class="submit"><input name="save<?php echo $i; ?>" type="submit" value="Save changes" />
	</span><div class="clearfix"></div></div>
	<div class="rm_options">
	
	<?php break;
	
	}
	}
	?>
	
	<input type="hidden" name="action" value="save" />
	</form>
	<form method="post">
	<p class="submit">
	<input name="reset" type="submit" value="Reset" />
	<input type="hidden" name="action" value="reset" />
	</p>
	</form>
	 </div> 
	
	<?php
	}

	add_action('admin_init', 'mytheme_add_init');
	add_action('admin_menu', 'mytheme_add_admin');
	
?>