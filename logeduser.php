<?php

/**
 *
 * The plugin bootstrap file
 *
 * This file is responsible for starting the plugin using the main plugin class file.
 *
 * @since 0.0.1
 * @package LogedUser
 *
 * @wordpress-plugin
 * Plugin Name:     Logeduser
 * Description:     Create a shortcode called [logeduser] which display the name from the user that is loged in the website.
 * Version:         0.0.1
 * Author:          Esteban Herrera
 * Author URI:      https://estebanherrera.com
 * Text Domain:     Logeduser
 * Domain Path:     /lang
 */

function logeduser($atts){
    global $current_user, $user_login;
    wp_get_current_user();
    add_filter('widget_text', 'apply_shortcodes');
    if($user_login){
        return 'Hi ' . $current_user->display_name . '!';
    }else{
        return;
    }
}
add_shortcode('logeduser', 'logeduser');

?>