Explaining the 3 basic concepts involved in creating or modifying a theme

Designing the Layout
--------------------
1) Creating a design (Web Designer, Graphic Artist) responsible for visually creating a design for Home Page and any interior pages.  Generally created in Photoshop as a composition.

2) Purchasing a design.  Numerous sites such as http://themeforest.net provide very well designed HTML themes that come in .PSD format, HTML Format and can be used to create your layout or modify to match your needs at a very affordable rate.

Note: This can be seen by viewing the Photoshop comps located in the Assets folder of our HTML Mockup

Converting the Layout
---------------------
1) HTML - Depending on whether you created a design or purchased one, you may need to slice up the Photoshop comp into assets and create the Home and Interior HTML pages for your site.
2) CSS - Creating the visual layer of your web site will require you creating CSS to handle layout, typography, browser resets and any other visual aesthetics that help form your HTML web site.
3) Images - Assets such as images will be sliced from the Photoshop comp and referenced by an <img> tag or as a CSS background.
4) JavaScript - JQuery is one of the most common JavaScript libraries available for use in modern web design to provide your site with interactivity.  Also libraries such as Modernizr assist with creating HTML5 websites and the support of CSS3 in browsers that may not completely support it.

Note: This can be seen by viewing the HTML Mockup along with the HTML, CSS, Images and JavaScript libraries.

Modifying Drupal HTML Output
----------------------------
1) .info File (.info) - The .info file is the metadata that describes to Drupal what your theme is named, what your theme includes (css, javascript), what regions are available to display content on your page and any additional features your theme may provide.
2) Template Files (.tpl.php) - Drupal provides many different theming engines but the most commonly used is the Templating Engine which provides the designer or developer with various ways to output content.
3) Replacing Page Variables - Most everything in Drupal is wrapped up into a variable and you can control how variables are displayed to the user.  Replacing your static HTML headings, subheadings, menus and regions with these variables allows you to shape Drupal into outputting the data exactly how you would like.

Note: This can be seen by viewing the completed Drupal theme and is what we will be working through the rest of these chapters.  For more info refer to http://drupal.org/node/171194

Restoring from sites.zip and samoca.sql.zip
-------------------------------------------
You can follow the steps in the intro chapter using the exercise files to restore your Drupal instance to the same point we are now in the lesson.