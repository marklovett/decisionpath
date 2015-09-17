<?php
/*
Plugin Name: Impact
Plugin URI: http://impactpagebuilder.com
Description: The Ultimate WordPress Page Template Builder
Version: 1.1.5
Author: The Impact Team
License: Impact is released under a Split License. See LICENSE.TXT in the Impact root folder for details.
Author URI: http://impactpagebuilder.com
*/

$impact_root = dirname( plugin_basename( __FILE__ ) );

define( 'IMPACT_ROOT', WP_PLUGIN_DIR . '/' . $impact_root );
define( 'IMPACT_CSS', IMPACT_ROOT . '/css' );
define( 'IMPACT_JS', IMPACT_ROOT . '/js' );
define( 'IMPACT_LANGUAGES', IMPACT_ROOT . '/languages' );
define( 'IMPACT_LIB', IMPACT_ROOT . '/lib' );
define( 'IMPACT_ADMIN', IMPACT_LIB . '/admin' );
define( 'IMPACT_FUNCTIONS', IMPACT_LIB . '/functions' );
define( 'IMPACT_TEMPLATES', IMPACT_LIB . '/templates' );
define( 'IMPACT_UPLOADS', WP_CONTENT_DIR . '/uploads/impact' );

require_once( IMPACT_FUNCTIONS . '/impact-hooks.php' );
require_once( IMPACT_FUNCTIONS . '/impact-widget-areas.php' );
require_once( IMPACT_FUNCTIONS . '/impact-post-data.php' );
require_once( IMPACT_FUNCTIONS . '/impact-templates.php' );
require_once( IMPACT_FUNCTIONS . '/impact-pagehandler.php' );
require_once( IMPACT_FUNCTIONS . '/impact-import-export.php' );

if( is_admin() )
{
	require_once( IMPACT_ADMIN . '/impact-menu.php' );
	require_once( IMPACT_ADMIN . '/impact-template-builder.php' );
	require_once( IMPACT_ADMIN . '/impact-hook-boxes.php' );
	require_once( IMPACT_ADMIN . '/impact-nuts-bolts.php' );
	require_once( IMPACT_FUNCTIONS . '/impact-update.php' );
	require_once( IMPACT_FUNCTIONS . '/impact-activate.php' );
}

register_activation_hook( __FILE__, 'impact_activate' );
register_deactivation_hook( __FILE__, 'impact_deactivate' );

//end impact.php