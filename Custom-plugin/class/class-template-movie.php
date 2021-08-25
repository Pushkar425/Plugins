<?php 

class template_movie {
    
	function __construct() {

        add_action( 'archive_template', array( $this, 'get_movie_archive_template' ) );  
        add_filter('single_template', array($this, 'get_movie_single_template') );
    }

    function get_movie_archive_template( $archive_template ) {
     global $post;
     /* Checks for archive template by post type */
     if ( is_post_type_archive ( 'movie' ) ) {        
        $archive_template= plugin_dir_path(__DIR__) . 'templates/archive-movie.php'; 
     }
     return $archive_template;
   }

   function get_movie_single_template($single){
   	global $post;
    /* Checks for single template by post type */
    if ( $post->post_type == 'movie' ) {
         	
        if ( file_exists( plugin_dir_path(__DIR__) . '/templates/single-movie.php' ) ) {
            return plugin_dir_path(__DIR__) . '/templates/single-movie.php';
        }
    }
    return $single;
   }
   
   

}

/*
 * custom get_template_part function
 */

$podcast_template = new template_movie();
function myplugin_get_template( $slug, $part = '' ) {
    $template = $slug . ( $part ? '-' . $part : '' ) . '.php';

    $dirs = array();  

    $template_dir = get_template_directory() . '/';
    $dirs[] = $template_dir . PODCASTS_BASENAME . '/';
    $dirs[] = $template_dir;
    $dirs[] = PODCASTS_FOLDER . 'templates/';

    foreach ( $dirs as $dir ) {
        if ( file_exists( $dir . $template ) ) {
            return $dir . $template;
        }
    }
    return false;
}

?>