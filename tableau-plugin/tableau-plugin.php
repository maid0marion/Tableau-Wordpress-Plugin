<?php
/*
Plugin Name: Tableau Plugin
Project URI: https://github.com/maid0marion/Tableau-Wordpress-Plugin
Description: The following code defines and registers a shortcode to embed a Tableau visualization via an iFrame.
Version: 1.0.2
Author: Julie Repass
License: GPL2
*/
/*
Copyright (c) 2012 Julie Repass

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.

*/

// define shortcode parameters

function tableau_func( $atts, $content = null ) {

	// embed parameters: http://onlinehelp.tableausoftware.com/current/server/en-us/embed_list.htm
	extract( shortcode_atts( array(
		'server' => 'public.tableausoftware.com',
		'workbook' => 'workbook_name',
		'view' => 'view_name',
		'tabs' => 'yes',
		'toolbar' => 'yes',
		'revert' => '',
		'refresh' => '',
		'width' => '800px',
		'height' => '600px',
		'linktarget' => '',
		'showVizHome' => 'no',
		'options' => array(
			'display_name' => 'tableau',
			'open_tag' => '\n[tableau]',
			'close_tag' => '[/tableau]\n',
			'key' => '')
    ), $atts));

	$url = esc_url($server); // strips/adds schema, i.e. user can add or not add the server with http(s) schema

	$output = "<iframe src='{$url}/views/{$workbook}/{$view}?:embed=yes&:tabs={$tabs}&:toolbar={$toolbar}&:revert={$revert}&:refresh={$refresh}&:linktarget={$linktarget}&:showVizHome={$showVizHome}' width='{$width}' height='{$height}'></iframe>";
    return $output;
}

function tableau_addbuttons() {
   // Don't proceed if the current user lacks permissions
	if ( ! current_user_can( 'edit_posts' ) && ! current_user_can( 'edit_pages' ) ) {
    	return;
	}

   // Add only in Visual Editor mode
	if ( get_user_option( 'rich_editing' ) == 'true' ) {
   		add_filter( 'mce_external_plugins', 'add_tableau_mce_plugin' );
     	add_filter( 'mce_buttons_2', 'register_tableau_button' );
	}
}

// register Tableau shortcode for both the HTML and Visual editors
add_shortcode( 'tableau', 'tableau_func');
add_shortcode( 'tableau-button', 'tableau_func' );
add_action( 'admin_footer', 'tableau_quicktag' );

// define parameters for Tableau shortcode in the Visual Editor
function tableau_quicktag() {
?>
	<script type="text/javascript" charset="utf-8">
		QTags.addButton( 'tableau-plugin', 'tableau', '\n[tableau server="" workbook="" view="" tabs="" toolbar="" revert="" refresh="" linktarget="" width="800px" height="600px"]', '[/tableau]\n' );
	</script>
<?php
}

function register_tableau_button( $buttons ) {
   array_push( $buttons, "|", "tableau" );
   return $buttons;
}

// Load the TinyMCE plugin : editor_plugin.js
function add_tableau_mce_plugin( $plugin_array ) {
   $plugin_array['tableau'] = plugin_dir_url(__FILE__) . 'tinymce/tableau/editor_plugin.js';
   return $plugin_array;
}

// init process for button control
function tableau_refresh_mce( $ver ) {
  $ver += 3;
  return $ver;
}

add_filter( 'tiny_mce_version', 'tableau_refresh_mce' );
add_action( 'init', 'tableau_addbuttons' );

?>
