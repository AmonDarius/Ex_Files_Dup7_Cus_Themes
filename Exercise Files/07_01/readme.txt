Understanding the new HTML template and how to customize it

The html.tpl.php template prints the structure of the HTML document, including the contents of <head> tags the $scripts and $styles variables, as well as the opening and closing <body> tags with $page_top and $page_bottom regions and the $page variable, which prints the Drupal output from the page.tpl.php template. Unless you need to change the DOCTYPE, there’s probably no reason to override this file.

Since we want to make sure our theme is HTML5 ready we will need to modify a copy of the html.tpl.php template.  Let's begin by:

- From your editor create a folder called "templates" inside the "sites/all/themes/samoca" folder
- Navigate to the "modules/system" folder and copy the "html.tpl.php" file to your "sites/all/themes/samoca/templates" folder
- Next Copy the index.html page from the exercise folder to your "sites/all/themes/samoca" folder
- Compare the heading of the index.html to that of the html.tpl.php page to see what elements need to be replaced
- Let's begin by replacing the !doctype with that of an HTML5 doctype and cleanup the <html> and <head> elements with the following html:


<!DOCTYPE HTML>
<html dir="<?php print $language->dir; ?>">
<head>


- Browse to your Drupal instance and Flush the Drupal cache
- Preview the source code using Firebug

Since we are making sure are custom Drupal theme is HTML5 compliant we will take advantage of the JavaScript libraries Modernizr and Selectivizr.

- Begin by browsing back to your editor and creating a new folder called "js" inside of the "sites/all/themes/samoca/assets" folder
- Next either download a copy of Modernizr from "http://www.modernizr.com" or if your are a Lynda.com premium subscriber you can copy it from the exercise folder
- Open up the "sites/all/themes/samoca/samoca.info" file and add a script reference to Modernizr with the following metadata 

scripts[] = assets/js/modernizr.js

- Browse back to your Drupal instance and Flush the Drupal cache
- Review the code using Firebug and notice the reference to Modernizr and the new classes being added to the <html> element

Since Selectivizr relies on conditional statements we will add this directly to the html.tpl.php file and utilize some Drupal variables to access the file from the js folder

- Browse back to your editor and open up html.tpl.php from within your "sites/all/themes/samoca/templates" folder
- Add the following directly after the "print $scripts" statement

<!--[if lt IE 9]>
<script src="<?php print base_path() . path_to_theme(); ?>/assets/js/selectivizr-min.js"></script>
<![endif]-->

- Browse back to your Drupal instance and Flush the Drupal cache
- Since the code we added is meant to target Internet Explorer version 8 or less you will need to have a copy of Internet Explorer to view that code is being outputted correctly.

If you were able to follow along correctly then the completed htmlp.tpl.php file should look like this:

<!DOCTYPE HTML>
<html dir="<?php print $language->dir; ?>">
<head>
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  
  <?php print $styles; ?>
  <?php print $scripts; ?>

  <!--[if lt IE 9]>
	<script src="<?php print base_path() . path_to_theme(); ?>/assets/js/selectivizr-min.js"></script>
  <![endif]-->

</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</body>
</html>

If you need more information regarding the html.tpl.php template then you can refer to the documentation located at http://api.drupal.org/api/drupal/modules--system--html.tpl.php/7