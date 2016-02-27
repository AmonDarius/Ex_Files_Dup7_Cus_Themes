How to install, configure and use Theme Developer module
http://drupal.org/project/devel_themer
http://drupal.org/project/devel

The Theme Developer Module and it's dependency module Devel allow for Drupal Developers and Themers to add content often needed to completed themes as well as the ability to introspect how Drupal is outputting content by displaying page variables and templates it is using.

Let's begin by downloading and installing both modules
1) Browse to http://drupal.org/project/devel and download the Drupal 7 version of the module
2) Extract the contents into the "sites/all/modules" folder of your Drupal 7 instance
3) Browse to http://drupal.org/project/devel_themer and download the Drupal 7 version of the module
4) Extract the contents into the "sites/all/modules" folder of your Drupal 7 instance
5) Browse to http://samoca:8082/admin/modules and scroll down to "Development" fieldset
6) Enable Devel, Devel Generate and Theme Developer modules and click "Save configuration"

Using Devel
--------------
1) Browse to samoca:8082/admin/structure/block
2) Scroll down to Disabled and choose Sidebar first region for the Development block
3) Click "Save blocks" and browse back to the homepage, the Devel module block should now be visible
4) Examine the Devel Settings for query log, Display $page array

Using Devel to generate content
--------------------------------
Adding dummy content to allow for easier theme development is often beneficial when you are waiting on the client for content

1) Browse to samoca:8082/admin/config/development/generate/content
2) Check "Delete all content in these content types before generating new content"
3) Under "How many nodes would you like to generate?" choose 10
4) Under "Maximum number of comments per node" choose 2
5) Leave all other defaults and click "Generate"
6) Return to home page an review generated content

Note: This module may generate some warning errors, just ignore them for now as they will not impact your Drupal installation.

Using Theme Developer Module
--------------------------------
You may have noticed at the bottom left of your browser a small interface labeled "Themer info".  This is
the Theme Developer interface and allows us to introspect what templates and variables Drupal is outputting.

1) Check the box within "Themer info"
2) Click on any element to see the information about the Drupal theme function or template that created it.
3) Wherever you move your cursor, areas of the page will highlight with red border.  Click the top of the first piece of content on the home page.
4) Look at the theme info section labeled "Template" it should reference "themes/bartik/templates/node.tpl.php"
5) This is our first glance at what template is being used by Drupal to output the content and is something we can modify later in our training.
6) If you hover over the bottom of the Themer Info at the section that says "Array", it will expand and show you all the variables available.
7) We can see such variables as "title" and "body"

Note: we will be using this tool later in the training to help us identify which templates to modify.

Restoring from sites.zip and samoca.sql.zip
-------------------------------------------
You can follow the steps in the intro chapter using the exercise files to restore your Drupal instance to the same point we are now in the lesson.
