Tableau Plugin
==============
	*Contributors:* Julie Repass (maid0marion), PerS
	*Tags:* shortcode, embed, tableau
	*Tested versions:* 3.3.1, 3.4.1, 4.0
	*Tested up to:* 4.0

Description
===========
Php Shortcode to embed a Tableau Server View in a Wordpress page via an iFrame. Plus a shortcode button added to both the HTML and Visual editor.

Installation
============
1. Upload the 'tableau-plugin' folder to the directory used to store plugins (default is `/wp-content/plugins/`)
2. Activate the plugin through the 'Plugins' menu in WordPress

Uninstallation
==============
1. Remove the 'tableau-plugin' folder from the plugins directory in your Wordpress installation (default is `/wp-content/plugins/`).

Using the Plugin
================
The plugin adds a button to both the Visual and HTML editors to insert short code for embedding an interactive Tableau Server view.  For more information on using the Tableau plugin for Wordpress, please visit the [How to Use the Tableau Wordpress Plugin]( 
https://github.com/maid0marion/Tableau-Wordpress-Plugin/wiki/How-to-Use-the-Tableau-Wordpress-Plugin) wiki page.

Screenshots
===========
1. Screenshot-1.png: tinyMCE pop-up window for Tableau button in Visual editor 
2. Screenshot-2.png: short code generated from Tableau button in HTML editor

Frequently Asked Questions
==========================

1. *Why use an iFrame rather than the Javascript code generated from the "Share" button on Tableau Server?*
When trying to embed a Tableau Server view in a Wordpress post, the Javascript embed code would work only
occasionally.  Using the iFrame option consistently displayed the embedded Tableau Server view when viewing
the published post in different browsers.
2. *What about installing this feature via a shared Wordpress Plugin?*
That is the plan. This is version 1 where I wanted to make the shortcode available now to make it
easier to embed Tableau Server views using the available parameter options.

Changelog
=========
V1.0.2 - 17.09.2014
-------------------
* Added the showVizHome=no parameter (see [How to Fix Your iFrame](http://www.tableausoftware.com/public/blog/2014/03/fix-your-iframe-2386))

V1.01 - 23.03.2012
------------------
* Fixed bug for 'revert' parameter and added support for target URL parameter
* Tested code in 3.4.1 and fixed issue with closing tag in HTML editor

Upgrade Notice
==============
V1.01
-----
Updated parameter options and fixed issue with closing tag in HTML editor.


