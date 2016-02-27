How to create and configure a base .info file and view what information is displayed in Theme interface

Creating the base Samoca theme
-------------------------------
1) Browse to "sites/all/themes" and create a folder called "samoca" which will hold our new theme
2) Create a new file within the "samoca" folder called "samoca.info" this will hold all of our themes metadata
3) Within "samoca.info" add "name = Samoca" metadata field to give our theme a name
4) Add "description = A custom theme for the San Angelico Museum of Contemporary Art" to give our theme a description
5) Add "core = 7.x" to specify that our theme is meant for Drupal 7
6) Navigate to the Appearance tab and select "SAMOCA" as our Default theme
7) View the Home Page

Note: We are now seeing the default Drupal HTML output which gives us a good example of what styling if any gets applied by the core and contributed modules and we could technically create a theme by creating a stylesheet directly addressing the default elements and classes Drupal outputs without even touching a template.


Adding the CSS
------------------
1) Create a folder called "assets" within the "sites/all/themes/samoca" folder
2) Copy the "css" folder from the exercise files to the "sites/all/themes/samoca/assets" folder
3) Add the following style references based off our Mockup to the "samoca.info" file

; CSS
stylesheets[all][] = assets/css/reset.css
stylesheets[all][] = assets/css/typography.css
stylesheets[all][] = assets/css/layout.css
stylesheets[all][] = assets/css/drupal.css