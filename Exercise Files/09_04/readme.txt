How to modify block templates to new page variables and template names

Migrating the block.tpl templates
---------------------------------------------------------
1) Navigate to modules folder and copy the "node.tpl.php" file to your templates folder.
2) Compare the block.tpl.php Drupal 6 template in the exercise folder named Drupal 6 to the Drupal 7 default block.tpl in the modules system folder and begin replacing regions and variables.

- $title is now wrapped with $title_prefix and $title_suffix to allow modules to display content around it

3) Repeat process for block-user.tpl, block-right.tpl and block-block-1.tpl


