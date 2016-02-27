Examining the Bartik theme file structure

All Default themes installed with the Drupal 7 installation reside within the themes folder. We will examine the Bartik theme, folder structure and files that make up the theme.

Directions
----------------------
1) Browse to themes/bartik folder within the Drupal 7 instance from your favorite text editor.
2) color folder contains the color module which allows for visually changing the color of backgrounds, header, footer, titles, headings and links within the Bartik theme.
3) css folder contains all the stylesheets used by the Bartik theme.
4) images folder contains all images used by Bartik theme.
5) templates folder contains all templates being overridden by the Bartik theme.
6) bartik.info file contains the metadata for the Bartik theme which tells Drupal what the theme is called, it's description, what core version of Drupal it uses, any stylesheets and scripts needing to be included, regions that can be used to output content and any features specific to the theme.
7) logo and screenshot provide the theme with a visual reference from the Appearance tab.
8) template.php allows for advanced theming and overriding of variables through preprocess and process functions.

Exploring the bartik.info file
------------------------------
1) Open up the bartik.info file from your favorite text editor and review the following fields below.  Any fields not mentioned are either not required or not recommended, any fields added should be added when creating a custom theme.

name (required)
---------------
The human readable name can now be set independently from the internal "machine" readable name. This imposes fewer restrictions on the allowed characters.


description (optional)
----------------------
Short description of the theme displayed on the Appearance page next to the themes name.


core (required)
---------------
Indicates what major version of Drupal core theme is compatible with.
If it does not match, the theme will be disabled.


engine (required most cases)
----------------------------
Indicates which theming engine should be used.
If none is provided, the theme is assumed to be stand alone, i.e., implemented with a ".theme" file. Most themes should use "phptemplate" as the default engine.


stylesheets[]
--------------
Indicates which stylesheets to include in the html.tpl.php template outputted with the $styles variable.

Traditionally, themes default to using style.css automatically and could add additional stylesheets by calling drupal_add_css() in their template.php file. Starting in Drupal 6, themes can also add style sheets through their .info file.

Starting in Drupal 7, themes no longer default to using style.css if it is not specified in the .info file.


scripts[]
---------
Indicates which JavaScripts to include in the html.tpl.php template outputted with the $scripts variable.

Traditionally, themes could add Javascripts by calling drupal_add_js() in their template.php file. Starting in 6.x, if a file named script.js exists in the theme directory then it is automatically included. However, in Drupal 7, this behavior has been changed again so that script.js is only included if it has been specified in the .info file:


regions[]
----------
The block regions available to the theme defined by specifying the key of 'regions' followed by the internal "machine" readable name in square brackets and the human readable name as the value, e.g., regions[name] = The region name.

If no regions are defined, the following values are assumed. 
regions[header] = Header
regions[highlighted] = Highlighted
regions[help] = Help
regions[content] = Content
regions[sidebar_first] = Left sidebar
regions[sidebar_second] = Right sidebar
regions[footer] = Footer


base theme
------------
Sub-themes can declare a base theme. This allows for theme inheritance, meaning the resources from the "base theme" will cascade and be reused inside the sub-theme.


Creating a sub theme from the Bartik theme
------------------------------------------
1) Create a new folder called bartiksub under "sites/all/themes" folder
2) Create a new file called "bartiksub.info" within the "sites/all/themes/bartiksub" folder
3) Within the bartiksub.info file add the following metadata:
	name = Bartik Sub
	description = A flexible, recolorable Bartik sub-theme with many regions.
	core = 7.x 
	base theme = bartik
5) Copy the regions[] metadata from bartik.info file located in "themes/bartik"
6) Copy logo.png from "themes/bartik" to "sites/all/themes/bartiksub"
7) Clear the cache (Theme Registry) by selecting "Flush all caches" from the Admin Menu toolbar - Drupal icon
8) Navigate to Appearance interface from the Admin Menu toolbar
9) Locate "Bartik Sub" click on "Enable and set default"
10) Close Appearance interface and sub theme should now be enabled.

Restoring from sites.zip and samoca.sql.zip
-------------------------------------------
You can follow the steps in the intro chapter using the exercise files to restore your Drupal instance to the same point we are now in the lesson.
