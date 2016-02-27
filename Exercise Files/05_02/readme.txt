Looking at how CSS is referenced in and how it is outputted by Drupal

Adding style sheets:

In Drupal 7, the style.css file will be used only if it is specified in the .info file. Adding other styles is as simple as defining a new 'stylesheets' key with its media property and the name of the style sheet. Keep in mind that defining custom styles will prevent the default "style.css" from loading. Remember to explicitly define the default style sheet if your theme uses it.

Add a style sheet for all media
--------------------------------
stylesheets[all][] = theStyle.css

1) Browse to the "sites/all/themes/barktiksub" folder
2) Create a new folder called "assets" and within there another folder called "css"
3) Within the "css" folder create a stylesheet called "custom.css"
4) Insert the following CSS rule into custom.css

#header {
  background-color: #CF3535;
  background-image: -moz-linear-gradient(top, #CD2D2D 0%, #CF3535 100%);
}

5) Save custom.css
6) Open up the barktiksub.info file and insert the following metadata for including a default stylesheet:  stylesheets[all][] = assets/css/custom.css
7) Flush the Drupal Cache


Add a style sheet for print media
--------------------------------
stylesheets[print][] = thePrintStyle.css

1) Within the "css" folder create a stylesheet called "print.css"
2) Insert the following CSS rule into print.css

#logo{
  display: none;
}

3) Save print.css
4) Open up the barktiksub.info file and insert the following metadata for including a print stylesheet:  stylesheets[print][] = assets/css/print.css
5) Flush the Drupal Cache

Add a style sheet with media query
---------------------------------
stylesheets[screen and (max-width: 600px)][] = theStyle600.css

1) Within the "css" folder create a stylesheet called "media.css"
2) Insert the following CSS rule into media.css

#header {
  background-color: #4E4E4E;
  background-image: -moz-linear-gradient(center top , #4A4A4A 0%, #4E4E4E 100%);
}

3) Save media.css
4) Open up the barktiksub.info file and insert the following metadata for including a media query stylesheet:  stylesheets[screen and (max-width: 600px)][] = assets/css/media.css
5) Flush the Drupal Cache


Adding external stylesheets
----------------------------
To use a stylesheet external to your theme, such as one hosted on a CDN, you cannot use the themes .info file. Instead you can add this in template.php. In Drupal 7 this is considered an advanced theming technique and is done as follows:

1) Within the "sites/all/themes/barktiksub" folder create a new file called template.php
2) Insert the following PHP code (notice no need for closing PHP statement

<?php

	// ADD REFERENCE TO EXTERNAL STYLESHEET
	function bartiksub_preprocess_html(&$variables) {
  		drupal_add_css('http://fonts.googleapis.com/css?family=News+Cycle', array('type' => 'external'));
	} 

3) Flush the Drupal Cache
 

Conditional Stylesheets
-----------------------
Probably the best way is to use the new Conditional Styles Module (http://drupal.org/project/conditional_styles) and modify your theme's .info file to include conditional styles, thus:

1) Download the Conditional Styles Module, place extracted tar.gz file into your "sites/all/modules" folder
2) Browse to http://samoca:8082/admin/modules, scroll down to the Other field set and enable "Conditional Stylesheets" module
3) Click "Save configuration"
4) Browse to "sites/all/themes/bartiksub/assets/css" and create a stylesheet called ie.css
5) Open up bartiksub.info and insert the following metadata for including a conditional stylesheet:  stylesheets-conditional[if lt IE 8][all][] = assets/css/ie.css
6) Flush the Drupal Cache
7) Open up Internet Explorer, view source and confirm conditional stylesheet added.