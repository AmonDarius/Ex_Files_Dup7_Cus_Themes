How to use Block Class module
http://drupal.org/project/block_class

Block Class allows users to add classes to any block through the block's configuration interface. By adding a very short snippet of PHP to a theme's block.tpl.php file, classes can be added to the parent <div class="block ..."> element of a block. Hooray for more powerful block theming!

Let's begin by downloading and installing Block Class module
1) Browse to http://drupal.org/project/block_class and download the Drupal 7 version of the module
2) Extract the contents into the "sites/all/modules" folder of your Drupal 7 instance
3) Browse to http://samoca:8082/admin/modules and scroll down to "Other" fieldset
4) Enable "Block Class" module and click "Save configuration"

Using Block Class module to add custom classes to Blocks of content
1) Browse to http://samoca:8082/admin/structure/block
2) Under the Sidebar first region click on "configure" for the "Navigation" block
3) You will see a new section called "Block Class Settings"
4) Enter a new class called "our-nav"
5) Click "Save block" and browse back to home page
6) View source code and verify class was added





