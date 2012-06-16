**Tableau Plugin**
Contributors: Julie Repass (maid0marion)
Tags: shortcode, embed, tableau
Requires at least: 
Tested up to: 3.3.1
Stable tag: 

**Description**

Php Shortcode to embed a Tableau Server View in a Wordpress page via an iFrame. Plus a shortcode button added to both the HTML and Visual editor.

**Installation**

1. Upload the `tableau-plugin' folder to the directory used to store plugins (default is `/wp-content/plugins/`)
2. Activate the plugin through the 'Plugins' menu in WordPress

**Uninstallation**
1. Remove the 'tableau-plugin' folder from the plugins directory in your Wordpress installation (default is '/wp-content/plugins/').

**Using the Plugin**
The plugin adds a button to both the Visual and HTML editors to insert short code for embedding an interactive Tableau Server view.  For more information on using the Tableau plugin for Wordpress, please visit the [How to Use the Tableau Wordpress Plugin]( 
https://github.com/maid0marion/Tableau-Wordpress-Plugin/wiki/How-to-Use-the-Tableau-Wordpress-Plugin) wiki page.

== Screenshots ==

1. Screenshot-1.png: tinyMCE pop-up window for Tableau button in Visual editor 

![Screenshot of TinyMCE popup](https://github.com/maid0marion/Tableau-Wordpress-Plugin/raw/master/tableau-plugin/Screenshot-1.png)

2. Screenshot-2.png: short code generated from Tableau button in HTML editor

![Screenshot of using Tableau shortcode in HTML editor](https://github.com/maid0marion/Tableau-Wordpress-Plugin/raw/master/tableau-plugin/Screenshot-2.png)


== Frequently Asked Questions ==

= Why use an iFrame rather than the Javascript code generated from the "Share" button on Tableau Server? =

When trying to embed a Tableau Server view in a Wordpress post, the Javascript embed code would work only
occasionally.  Using the iFrame option consistently displayed the embedded Tableau Server view when viewing
the published post in different browsers.

= What about installing this feature via a shared Wordpress Plugin? =

That is the plan. This is version 1 where I wanted to make the shortcode available now to make it
easier to embed Tableau Server views using the available parameter options.

