<?php


class Custom_plugin {

    function __construct() {

        add_action( 'init', array( $this, 'create_post_type' ) );    
        add_action( 'wp_enqueue_scripts', array($this,'enqueue_podcast_scripts' ), 99 );
        
    }

    function create_post_type(){
        $supports =array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions','page-attributes' );
        $labels= array(
                     'name' => _x('Movies', 'Post Type General Name', 'Woodworking'),
                     'singular_name' =>_x( 'Movie', 'Post Type Singular Name', 'Woodworking' ),
                     'menu_name'           => __( 'Movies', 'admin menu' ),
                     'parent_item_colon'   => __( 'Parent Movie', 'Woodworking' ),
                     'all_items'           => __( 'All Movie', 'Woodworking' ),
                     'view_item'           => __( 'View Movie', 'Woodworking' ),
                     'add_new_item'        => __( 'Add New Movie', 'Woodworking' ),
                     'add_new'             => __( 'Add New', 'Woodworking' ),
                     'edit_item'           => __( 'Edit Movie', 'Woodworking' ),
                     'update_item'         => __( 'Update Movie', 'Woodworking' ),
                     'search_items'        => __( 'Search Movie', 'Woodworking' ),
                     'not_found'           => __( 'Not Found', 'Woodworking' ),
                     'not_found_in_trash'  => __( 'Not found in Trash', 'Woodworking' ),
                 );
         $args= array(
             'supports'=>$supports,
             'labels'=> $labels,
             'public'=> true,
             'has_archive'=> 'movie',
             //'capability_type'     => array('post','page','movie','article'),
             'rewrite'=> array('slug'=>'movie'),
            );
        
            register_post_type('movie',$args);
     }
    function enqueue_podcast_scripts() {
        $plugin_url = plugin_dir_url( __DIR__ );
        if(is_post_type_archive( 'movie' ) ) {
            wp_enqueue_style( 'podcast_style_bootstrap',  "https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css");
        }
        wp_enqueue_style('blog_main_style', get_stylesheet_uri());
        if(is_post_type_archive( 'movie' ) || is_singular('movie')){
           // wp_enqueue_style( 'podcast_style',  $plugin_url . "assets/css/podcast.css");
        }
        
    }

}

$podcast_class = new Custom_plugin(); ?>