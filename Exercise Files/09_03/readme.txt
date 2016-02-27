How to modify node templates to new page variables and template names

Migrating the node.tpl templates
---------------------------------------------------------
1) Navigate to modules folder and copy the "node.tpl.php" file to your templates folder.
2) Compare the node.tpl.php Drupal 6 template in the exercise folder named Drupal 6 to the Drupal 7 default page.tpl in the modules system folder and begin replacing regions and variables.

- $picture is now named $user_picture in Drupal 7
- $title is now wrapped with $title_prefix and $title_suffix to allow modules to display content around it
- $terms (taxonomy terms have evolved into a field in in Drupal 7) so the field must exist then you can <?php print render($content['field_tags']); ?> 
- $content is now an array of node items
- $content variables can be hidden and shown later within a template
- clear-block has been changed to clearfix

3) Repeat process for node-page.tpl, node-flower.tpl and node-blog.tpl

Note: In order to build out the links to display like the Drupal 6 theme requires, we need to manually build the links.  Make sure Devel is installed and enabled and use
<?php dpm($content); ?> to introspect the content variables links array

<?php print render($content['links']['blog']['#links']['blog_usernames_blog']['href']); ?>
<?php print render($content['links']['blog']['#links']['blog_usernames_blog']['title']); ?>


