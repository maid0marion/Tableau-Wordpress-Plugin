=== Wordpress Shortcode - Embed-Tableau-Server-Viz ===
Contributors: Julie Repass (maid0marion)
Tags: shortcode, embed, tableau
Requires at least: 
Tested up to: 3.3.1
Stable tag: 

Php Shortcode to embed a Tableau Server View in a Wordpress page via an iFrame. Plus
Php code template to add shortcode button to HTML editor.

== Description ==

The current version of this project contains two template files: 
1. 'embed-tableau-viz.php' to define and register the shortcode, and 
2. (Optional) 'tableauviz-editor-button.php'. to add a "tableauviz" shortcode button to the HTML editor.


== Installation ==

1. Upload `plugin-name.php` to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Place `<?php do_action('plugin_name_hook'); ?>` in your templates

== Frequently Asked Questions ==

= Why use an iFrame rather than the Javascript code generated from the "Share" button on Tableau Server? =

When trying to embed a Tableau Server view in a Wordpress post, the Javascript embed code would work only
occasionally.  Using the iFrame option consistently displayed the embedded Tableau Server view when viewing
the published post in different browsers.

= What about installing this feature via a shared Wordpress Plugin? =

That is the plan. This is version 1 where I wanted to make the shortcode available now to make it
easier to embed Tableau Server views using the available parameter options.


== Screenshots ==

1. This screen shot description corresponds to screenshot-1.(png|jpg|jpeg|gif). Note that the screenshot is taken from
the directory of the stable readme.txt, so in this case, `/tags/4.3/screenshot-1.png` (or jpg, jpeg, gif)
2. This is the second screen shot

== Changelog ==

= 1.0 =
* A change since the previous version.
* Another change.


== Upgrade Notice ==

= 1.0 =
Upgrade notices describe the reason a user should upgrade.  No more than 300 characters.

= 0.5 =
This version fixes a security related bug.  Upgrade immediately.

== Arbitrary section ==

You may provide arbitrary sections, in the same format as the ones above.  This may be of use for extremely complicated
plugins where more information needs to be conveyed that doesn't fit into the categories of "description" or
"installation."  Arbitrary sections will be shown below the built-in sections outlined above.

== A brief Markdown Example ==

Ordered list:

1. Some feature
1. Another feature
1. Something else about the plugin

Unordered list:

* something
* something else
* third thing

Here's a link to [WordPress](http://wordpress.org/ "Your favorite software") and one to [Markdown's Syntax Documentation][markdown syntax].
Titles are optional, naturally.

[markdown syntax]: http://daringfireball.net/projects/markdown/syntax
            "Markdown is what the parser uses to process much of the readme file"

Markdown uses email style notation for blockquotes and I've been told:
> Asterisks for *emphasis*. Double it up  for **strong**.

`<?php code(); // goes in backticks ?>`
