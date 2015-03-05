<?php
// Prevent direct file access
if( !defined( 'ABSPATH' ) ) {
        exit( 'You are not allowed to access this file directly.' );
}
/**
* Deactivates the plugin
*
* @return bool
*/
function your_plugins_name_deactivate_self() {
if( ! current_user_can( 'activate_plugins' ) ) {
return false;
}
// deactivate
deactivate_plugins( 'your-plugins-name/your-plugins-name.php' );
// get rid of "Plugin activated" notice
if( isset( $_GET['activate'] ) ) {
unset( $_GET['activate'] );
}
// show notice to user
add_action( 'admin_notices', 'your_plugins_name_requirement_notice' );
return true;
}
/**
* Output a notice
*/
function your_plugins_name_requirement_notice() {
?>
<div class="updated">
<p><?php _e( 'Plugin was not activated because it requires your server to run PHP 5.3 or higher.', 'your-plugins-name' ); ?></p>
</div>
<?php
}

add_action( 'admin_init', 'your_plugins_name_deactivate_self' );
?>