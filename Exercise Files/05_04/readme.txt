Look at how a region is referenced and displayed in a theme and where they can be viewed in blocks
http://drupal.org/node/171224

Regions are areas in a theme that are available for adding blocks and content to. The regions available in the theme are defined within .info files.

Drupal 7 adds Highlighted and Help as default regions. By default, the textual content of the Help region is the same as the $help variable was in page.tpl.php for Drupal 6.

The $content region
In Drupal 6 and before the $content variable in page.tpl.php contained the main page content appended with the blocks positioned into the content region (if you had that region defined).

In Drupal 7, $content became a full region and is now mandatory in all themes. This new requirement was set up so that when enabling new themes, Drupal knows where to put the main page content by default.

In Drupal 6, it was only possible to put blocks after the main page content in this region. The only way to put blocks before the main page content was to define a specific region for that purpose. Drupal 7 now makes the main page content its own block. This makes it possible to put blocks before or after the main page content in the region without hacking in a new region.

Default Drupal 7 Regions
-------------------------------------
regions[sidebar_first] = Left sidebar
regions[sidebar_second] = Right sidebar
regions[content] = Content
regions[header] = Header
regions[footer] = Footer
regions[highlighted] = Highlighted
regions[help] = Help

Note: Adding a custom region prevents the defaults from being used. If you want to keep the defaults in addition to custom regions, manually add in the defaults.

Directions
--------------------------------------
1) Navigate to "samoca:8082/admin/structure/block" and review the regions currently available for content
2) Click "Demonstrate block regions (Bartik Sub)" to expose where regions will be displayed
3) Open up "bartiksub.info" and add the following region at the top of the region area: regions[custom] = Custom
4) Flush the cache
5) Refresh the Blocks interface and notice the new region called Custom, however if you expose the region you will not see it displaying anywhere just yet
6) Create a folder called "templates" within the "sites/all/themes/bartiksub" directory
7) Copy the page.tpl.php file from the "themes/bartik" directory to "sites/all/themes/bartiksub/templates" directory
8) Open up page.tpl.php and add the following "<?php print render($page['custom']); ?>" on line 244 right before the closing <div> tags
9) Flush the cache
10)Refresh the Blocks interface and expose the Block regions, you will now see our Custom region being displayed
11)Move the "Who's online" block to the Custom region and view the results

Completed Bartiksub Theme
--------------------------
You can extract the bartiksub.zip file into the "sites/all/themes" folder, enable the theme in the Appearance interface and flush the page cache to see what has been covered in Chapter 5
