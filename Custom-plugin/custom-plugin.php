<?php
/*
Plugin Name: Custom-plugin 
Plugin URI: http://www.wpexplorer.com/wordpress-page-templates-plugin/
Version: 1.1.0
Author: WPExplorer
Author URI: http://www.wpexplorer.com/
*/


// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
    die;
}

define( 'PODCASTS_FOLDER', dirname( __FILE__ ) . '/' );
define( 'PODCASTS_BASENAME', basename( PODCASTS_FOLDER ) );



/*
 * Class for deaclaring and registering Podacast Post Type
 */
require_once plugin_dir_path( __FILE__ ) . 'class/class-first-movie.php';

/*
 * Assigning template to archive, single page
 */

require_once plugin_dir_path( __FILE__ ) . 'class/class-template-movie.php';






