<?php
/*
	Plugin Name: Your Plugin Name
	Plugin URI:
	Description:
	Stable Tag:
	Author:
	Version:
 */

// Prevent direct access to this file.
if( !defined( 'ABSPATH' ) ) {
        exit( 'You are not allowed to access this file directly.' );
}

// Check if PHP is at the minimum required version
if( version_compare( PHP_VERSION, '5.3', '>=' ) ) {
define( 'YOUR_PLUGIN_NAME_FILE', __FILE__ );
require_once dirname( __FILE__ ) . '/plugin.php';
} else {
require_once dirname( __FILE__ ) . '/php-backwards-compatibility.php';
}

?>