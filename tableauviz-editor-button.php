<?php 
/*
Project Name: Wordpress Shortcode - Embed Tableau Viz
Plugin URI: https://github.com/maid0marion/Wordpress-Shortcode---Embed-Tableau-Server-Viz
Description: The following code template adds a 'tableauviz' shortcode button to the HTML editor.  Backup current theme's shortcodes.php file in the ePanel directory
and insert code in HTML editor button array definition section.  Be sure to adjust syntax and variable names to match the other button definitions. Change default
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

  	$buttons[] = array('name' => 'tableauviz',
					'options' => array(
						'display_name' => 'tableauviz',
						'open_tag' => '\n[tableauviz server="public.tableausoftware.com" workbook="workbook_name" view="view_name" tabs="yes" toolbar="yes" revert="" refresh="" linktarget="" width="800" height="600" ]',
						'close_tag' => '[/tableauviz]\n',
						'key' => ''
					));
?>
