Looking at how Scripts are referenced and how it is outputted by Drupal

scripts
-----------
Traditionally, themes could add Javascripts by calling drupal_add_js() in their template.php file. Starting in 6.x, if a file named script.js exists in the theme directory then it is automatically included. However, in Drupal 7, this behavior has been changed again so that script.js is only included if it has been specified in the .info file:  scripts[] = myscript.js

Let's take a look at how to add reference to Modernizr script library which assists in HTML5 and CSS3 development.

1) Browse to the "sites/all/themes/barktiksub/assets" folder
2) Create a new folder called "js"
3) Copy from the 05_03 exercise folder the Modernizr script and paste it into the "js" folder
4) Open up the barktiksub.info file and insert the following metadata for including a script:  scripts[] = assets/js/modernizr.js
5) Flush the Drupal Cache
6) Open up Firefox and view the code and confirm a new class has been added to the <html> tag

Adding external reference to JavaScript
---------------------------------------
http://api.drupal.org/api/drupal/includes--common.inc/function/drupal_add_js/7

drupal_add_js('http://example.com/example.js', 'external');

Let's say we want to call the Modernizr library from an external url so that we make sure we have the latest version.
We can accomplish this by removing the reference to Modernizr in our .info file and adding an external reference inside our template.php file

1) Delete the "scripts[] = assets/js/modernizr.js" reference inside of bartiksub.info
2) Browse to "sites/all/themes/barktiksub/template.php"
3) Insert the following PHP function into your existing preprocess function: drupal_add_js('http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.0.6/modernizr.min.js', 'external');
4) Save the template.php file, flush the Drupal cache and preview the changes in Firefox using firebug