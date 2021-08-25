<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://onlinewebtutorhub.blogspot.in/
 * @since      1.0.0
 *
 * @package    Boiler
 * @subpackage Boiler/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Boiler
 * @subpackage Boiler/admin
 * @author     PU <p@gmail.com>
 */
class Boiler_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Boiler_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Boiler_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/boiler-admin.css', array(), $this->version, 'all' );
		wp_enqueue_style( "bootstrap.min.css", plugin_dir_url( __FILE__ ) . 'css/bootstrap.min.css', array() );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Boiler_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Boiler_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		//wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/boiler-admin.js', array( 'jquery' ), $this->version, false );
		wp_enqueue_script( "bootstrap.min.js", plugin_dir_url( __FILE__ ) . 'js/bootstrap.min.js', array( 'jquery' ), $this->version, true );
		wp_enqueue_script( "jquery.validate.min.js", plugin_dir_url( __FILE__ ) . 'js/jquery.validate.min.js', array( 'jquery' ), $this->version, true );
		
	}

	public function owt_plugin_menus(){
		add_menu_page('BP_MENU','BP_Menu','manage_options','bp_menu',array($this,'menu_working'),'dashicons-admin-media',53);
		add_submenu_page('bp_menu','bpsub_menu','bpsub_menu1','manage_options','bp_menu',array($this,'menu_working'));
		add_submenu_page('bp_menu','bpsub_menu1','bpsub_menu2','manage_options','sub-second',array($this,'menu_adding'));
	}
	public function menu_working(){
		include_once OWT_BOILER_PLAGIN_DIR.'/admin/partials/boiler-bp-menu.php';
		echo "<h2>Welcome to Boilerplate Menu</h2>";
		
	}

	function sample_admin_notice__success() {
		?>
		<div class="notice notice-success is-dismissible">
			<p><?php _e( 'Done! I have created Admin notice', 'sample-text-domain' ); ?></p>
		</div>
		<?php
	}
	

}
