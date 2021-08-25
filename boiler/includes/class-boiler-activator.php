<?php

/**
 * Fired during plugin activation
 *
 * @link       http://onlinewebtutorhub.blogspot.in/
 * @since      1.0.0
 *
 * @package    Boiler
 * @subpackage Boiler/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Boiler
 * @subpackage Boiler/includes
 * @author     PU <p@gmail.com>
 */
class Boiler_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public function activate() {
		
			$post_arr_data = array(
				"post_title"=>"Boiler Page",
				"post_name"=> "boiler-page",
				"post_status"=>"publish",
				"post_author"=>'admin',
				"post_content"=>"Just a practice to create a page in boilerplate",
				'post_type'=>"page"
			);
			wp_insert_post($post_arr_data);
	}
	
	

}
