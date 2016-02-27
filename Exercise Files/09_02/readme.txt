Adding a HTML template and modifying page templates

Migrating the page.tpl templates to html.tpl and page.tpl
---------------------------------------------------------
1) Navigate to modules folder and copy the "html.tpl.php" file to your templates folder.
2) Copy the page.tpl.php file from the exercise folder to the templates folder and rename is page--front.tpl.php
3) Compare the page-front.tpl.php Drupal 6 template in the exercise folder named Drupal 6 to the Drupal 7 default page.tpl in the modules system folder and begin replacing regions and variables.

- $search_box is now been moved to it's own search block in Drupal 7
- regions are now part of $page array and printed with render function
- $primary_links have been changed to $main_menu
- $secondary_links have been changed to $secondary_menu
- clear-block class has been changed to clearfix
- $left has been changed to sidebar_first
- $right has been changed to sidebar_second
- $title is now wrapped with $title_prefix and $title_suffix to allow modules to display content around it
- $mission has been deprecated
- $help is now a region
- $content is now a default region
- $footer_message has been deprecated
- $closure has been deprecated and moved to html.tpl as $page_bottom

$secondary_links now display user_menu so based on Hansel and Petal design we will remove these from printing

4) Repeat process for page.tpl and page-node-5.tpl (remember template suggestion for page node id is page--node--6.tpl)

Note: to render the search block inside the page--front.tpl refer to the following: http://drupal.org/node/26502
<?php $search_block = module_invoke('search', 'block_view', 'form'); ?>
<div id="search-box"><?php print render($search_block); ?></div>

