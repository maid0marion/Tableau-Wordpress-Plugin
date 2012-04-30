<?php 
/*
Plugin Name: Tableau Plugin
Project URI: https://github.com/maid0marion/Tableau-Wordpress-Plugin
Description: The following code defines and registers a shortcode to embed a Tableau visualization via an iFrame. 
Version: 1.0
Author: Julie Repass
License: GPL2
*/
/*
Copyright 2012  JULIE REPASS  (email : julie_repass@hotmail.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

// [tabviztag server="server_name" workbook="workbook_name" view="view_name" width="width" height="height" tabs="tabs" toolbar="toolbar" revert="revert" refresh="refresh" linktarget="linktarget"]
if ( ! function_exists('tevp_paths') ) {
	/*
	If using domain mapping or plugins that change the path dinamically, edit these to set the proper path and URL.
	*/
	function tevp_paths() {
		if ( !defined('TEVP_URL') )
			define('TEVP_URL', plugin_dir_url(__FILE__));
			
		if ( !defined('TADV_PATH') )
			define('TEVP_PATH', plugin_dir_path(__FILE__));
	}
	add_action( 'plugins_loaded', 'tevp_paths', 50 );
}
	

function tableau_func( $atts, $content = null ) {
		extract( shortcode_atts( array(
    				'server' => 'public.tableausoftware.com',
    				'workbook' => 'workbook_name',
    				'view' => 'view_name',
						'tabs' => 'yes',
						'toolbar' => 'yes',
						'revert' => '',
						'refresh' => '',
						'linktarget' => '_blank',
    				'width' => '800',
    				'height' => '600'   				
    				), $atts));

		$output = "<iframe src='http://{$server}/views/{$workbook}/{$view}?:embed=yes&:tabs={$tabs}&:toolbar={$toolbar}?:revert={$revert}?:refresh={$refresh}?:linktarget={$linktarget}' width='{$width}' height='{$height}'></iframe>";
    	return $output;
	}
	add_shortcode( 'tableau', 'tableau_func');

function tableau_addbuttons() {
   // Don't bother doing this stuff if the current user lacks permissions
   if ( ! current_user_can('edit_posts') && ! current_user_can('edit_pages') )
     return;
	    
   // Add only in Rich Editor mode
   if ( get_user_option('rich_editing') == 'true') {
     add_filter('mce_external_plugins', 'add_tableau_mce_plugin');
     add_filter('mce_buttons_2', 'register_tableau_button');
   }
}

add_shortcode( 'tableau-button', 'tableau_func');
add_action('admin_footer','tableau_quicktag');

function tableau_quicktag() {
?>
<script type="text/javascript" charset="utf-8">
/* Adding Quicktag buttons to the editor Wordpress ver. 3.3 and above
* - Button HTML ID (required)
* - Button display, value="" attribute (required)
* - Opening Tag (required)
* - Closing Tag (required)
* - Access key, accesskey="" attribute for the button (optional)
* - Title, title="" attribute (optional)
* - Priority/position on bar, 1-9 = first, 11-19 = second, 21-29 = third, etc. (optional)
*/

QTags.addButton( 'tableau-plugin', 'tableau', '\n[tableau server="" workbook="" view="" tabs="yes" revert="" refresh="" linktarget="" width="100%" height="100%"]', '[/tableau]\n' );
</script>
<?php 
}

function register_tableau_button( $buttons ) {
   array_push($buttons, "|", "tableau" );
   return $buttons;
}
 
// Load the TinyMCE plugin : editor_plugin.js (wp2.5)
function add_tableau_mce_plugin($plugin_array) {
   $plugin_array['tableau'] = plugin_dir_url(__FILE__) . 'tinymce/tableau/editor_plugin.js';
   return $plugin_array;
}
 
// init process for button control

function tableau_refresh_mce($ver) {
  $ver += 3;
  return $ver;
}

add_filter( 'tiny_mce_version', 'tableau_refresh_mce');

add_action('init', 'tableau_addbuttons');

?>