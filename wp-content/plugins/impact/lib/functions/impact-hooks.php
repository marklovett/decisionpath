<?php

function impact_head_tag( $impact_widget_area ) { do_action('impact_head_tag', $impact_widget_area); }
function impact_before_page_wrap( $impact_widget_area ) { do_action('impact_before_page_wrap', $impact_widget_area); }
function impact_after_page_wrap( $impact_widget_area ) { do_action('impact_after_page_wrap', $impact_widget_area); }

function impact_before_header( $impact_widget_area ) { do_action('impact_before_header', $impact_widget_area); }
function impact_in_header( $impact_widget_area ) { do_action('impact_in_header', $impact_widget_area); }
function impact_after_header( $impact_widget_area ) { do_action('impact_after_header', $impact_widget_area); }

function impact_before_container( $impact_widget_area ) { do_action('impact_before_container', $impact_widget_area); }
function impact_after_container( $impact_widget_area ) { do_action('impact_after_container', $impact_widget_area); }

function impact_before_content( $impact_widget_area ) { do_action('impact_before_content', $impact_widget_area); }
function impact_after_content( $impact_widget_area ) { do_action('impact_after_content', $impact_widget_area); }

function impact_before_sidebar( $impact_widget_area ) { do_action('impact_before_sidebar', $impact_widget_area); }
function impact_sidebar( $impact_widget_area ) { do_action('impact_sidebar', $impact_widget_area); }
function impact_after_sidebar( $impact_widget_area ) { do_action('impact_after_sidebar', $impact_widget_area); }

function impact_before_sidebar2( $impact_widget_area ) { do_action('impact_before_sidebar2', $impact_widget_area); }
function impact_sidebar2( $impact_widget_area ) { do_action('impact_sidebar2', $impact_widget_area); }
function impact_after_sidebar2( $impact_widget_area ) { do_action('impact_after_sidebar2', $impact_widget_area); }

function impact_before_footer( $impact_widget_area ) { do_action('impact_before_footer', $impact_widget_area); }
function impact_in_footer( $impact_widget_area ) { do_action('impact_in_footer', $impact_widget_area); }
function impact_after_footer( $impact_widget_area ) { do_action('impact_after_footer', $impact_widget_area); }

function impact_get_hook( $hook_id )
{
	global $wpdb;
	
	$impact_hooks = $wpdb->prefix . 'impact_hooks';
	
	if( $hook_data = $wpdb->get_row( "SELECT * FROM $impact_hooks WHERE `hook_id` = '$hook_id'", ARRAY_A ) )
	{
		$hook_data['hook_textarea'] = stripslashes( $hook_data['hook_textarea'] );
		return $hook_data;
	}
	else
	{
		return false;
	}
}

function impact_list_hook_locations( $selected = 'none_selected' )
{
	global $wpdb;
	
	$impact_hooks = $wpdb->prefix . 'impact_hooks';
	
	$hook_locations = array(
		'head_tag',
		'before_page_wrap',
		'before_header',
		'in_header',
		'after_header',
		'before_container',
		'before_content',
		'after_content',
		'before_sidebar',
		'sidebar',
		'after_sidebar',
		'before_sidebar2',
		'sidebar2',
		'after_sidebar2',
		'after_container',
		'before_footer',
		'in_footer',
		'after_footer',
		'after_page_wrap',
	);
	
	echo '<option value="">Choose Hook Location...</option>';
	
	foreach( $hook_locations as $hook )
	{
		$option = '<option value="' . $hook . '"';
		
		if( $hook == $selected )
		{
			$option .= ' selected="selected"';
		}
		
		$option .= '>' . $hook . '</option>';
		
		echo $option;
	}
}

function impact_list_hook_boxes( $selected = 'none_selected' )
{
	global $wpdb;
	
	$impact_hooks = $wpdb->prefix . 'impact_hooks';
	
	echo '<option value="">Choose Hook Box...</option>';
	
	if( $hooks = $wpdb->get_col( "SELECT `hook_id` FROM $impact_hooks" ) )
	{
		foreach( $hooks as $hook )
		{
			$option = '<option value="' . $hook . '"';
			
			if( $hook == $selected )
			{
				$option .= ' selected="selected"';
			}
			
			$option .= '>' . $hook . '</option>';
			
			echo $option;
		}
	}
	else
	{
		return false;
	}
}

function impact_hook_hook_boxes( $template_id )
{
	global $wpdb;
	
	$impact_hooks = $wpdb->prefix . 'impact_hooks';
	$hook_boxes = $wpdb->get_results( "SELECT `hook_id`, `hook_location`, `widget_position` FROM $impact_hooks WHERE `template_id` = '$template_id'", ARRAY_A );
	
	foreach( $hook_boxes as $hook_box => $hook_bits )
	{
		add_action( 'impact_' . $hook_bits['hook_location'], 'impact_render_hook_box', $hook_bits['widget_position'], 1 );
	}
}

function impact_render_hook_box( $hook_id )
{
	global $wpdb;
	
	$impact_hooks = $wpdb->prefix . 'impact_hooks';
	
	if( $hook = $wpdb->get_row( "SELECT * FROM $impact_hooks WHERE `hook_id` = '$hook_id'", ARRAY_A ) )
	{
		echo htmlspecialchars_decode( stripslashes( $hook['hook_textarea'] ) );
	}
	else
	{
		return false;
	}
}

function impact_update_hook_box( $hook_id, $template_id, $hook_location, $widget_position, $hook_textarea )
{
	global $wpdb;
	
	$hook_box_args = array(
		'template_id'		=> $template_id,
		'hook_location' 	=> $hook_location,
		'widget_position'	=> $widget_position,
		'hook_textarea'   	=> $hook_textarea,
	);
	
	$hook_box_primary = array(
		'hook_id'	=> $hook_id,
	);
		
	$hook_full_args = array_merge( $hook_box_args, $hook_box_primary );
	
	$impact_hooks = $wpdb->prefix . 'impact_hooks';
	
	if( $wpdb->update( $impact_hooks, $hook_box_args, $hook_box_primary ) )
	{
		$response = 'update';
	}
	elseif( $wpdb->insert( $impact_hooks, $hook_full_args ) )
	{
		$response = 'insert';
	}

	else
	{
		$response = false;
	}
	
	return $response;
}

function impact_delete_hook( $hook_id )
{
	global $wpdb;
	
	$impact_hooks = $wpdb->prefix . 'impact_hooks';

	if( $wpdb->query( "DELETE FROM $impact_hooks WHERE `hook_id` = '$hook_id'") )
	{
		return 'deleted';
	}
	else
	{
		return 'fail';
	}
}

function impact_list_hooked( $tag = false )
{
	global $wp_filter;
	
	if ( $tag )
	{
		$hook[$tag] = $wp_filter[$tag];
		
		if ( !is_array( $hook[$tag] ) )
		{
			trigger_error( "Nothing found for '$tag' hook", E_USER_WARNING );
			return;
		}
	}
	else
	{
		$hook = $wp_filter;
		ksort( $hook );
	}
	
	echo '<pre>';
	foreach( $hook as $tag => $priority )
	{
		echo "<br />&gt;&gt;&gt;&gt;&gt;\t<strong>$tag</strong><br />";
		ksort( $priority );
		foreach( $priority as $priority => $function )
		{
			echo $priority;
			foreach($function as $name => $properties)
			{
				echo "\t$name<br />";
			}
		}
	}
	echo '</pre>';
	
	return;
}

//end lib/functions/impact-hooks.php