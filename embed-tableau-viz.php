<?php 
/*
Project Name: Wordpress Shortcode - Embed Tableau Viz
Project URI: http://https://github.com/maid0marion/Wordpress-Shortcode---Embed-Tableau-Server-Viz
Description: The following code defines and registers a shortcode to embed a Tableau visualization via an iFrame. 
To use, backup current theme's shortcodes.php file in the ePanel directory.  Copy and paste code below (excluding
php open and close tags) into shortcode function definition and registration section.  Change default attribute 
values as appropriate.
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
function tableauviz_func( $atts, $content = null ) {
		extract( shortcode_atts( array(
    				'server_name' => 'public.tableausoftware.com',
    				'workbook_name' => 'workbook_name',
    				'view_name' => 'view_name',
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

add_shortcode( 'tableauviz', 'tableauviz_func')
?>
