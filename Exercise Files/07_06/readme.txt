Understanding block templates and their variables

Now that we are displaying dynamic content from our Page, Node and Region templates are theme is starting to take shape However if we take a look at
our Home page and our Interior Pages you will see that we still have a little more work to do before we are completely finished.  It's time for us to
take a look at Blocks and how we can modify them to output HTML just the way we need.

Let's begin by

- Browse to your editor and navigate to the "modules/block" folder and copy the block.tpl.php template to "sites/all/themes/samoca/templates" folder
- Examine the variables available to the block template
- Browse to Drupal and open up the About Us page and compare it to the Static HTML version
- Inspect the Sidebar region in both version and notice the HTML5 element of <aside> and the nested <divs> that Drupal wraps the Block content with
- Modify the block.tpl.php and change the parent <div> tag to an <aside> tag, remove the "id" attribute and remove the div surrounding the $content variable
- Save your changes
- Browse back to Drupal and Flush the page cache
- Inspect the Sidebar Block again using Firebug and notice that the wrapping <div> elements are now gone and the <aside> element is appearing around ALL Blocks


Comparing the sidebar on aboutus.html we see that some of the CSS is not displaying properly due to the way the html markup is being displayed.
We need to add a class to the sidebar exhibit block but how do we go about doing that.  We can use the Theme Developer module to find the suggested template to create and manually add the class

- Enable Theme Developer module if it is not already enabled
- Use Theme Developer to provide template naming suggestion
- Browse back to your editor and create a copy of the block.tpl.php template from your templates folder and name it "block--views--sidebar-exhibit-block.tpl.php"
- Add to the classes "feature-block"
- Save your changes
- Browse back to Drupal and Flush the page cache
- Inspect the Sidebar Block again using Firebug and notice that the class has been added to this specific Block only

However some of our Blocks have shifted up in our layout.  This is because the Content Links block needs to have a different class assigned to it.
Let's do that now by

- Use Theme Developer to provide template naming suggestion
- Browse back to your editor and create a copy of the block.tpl.php template from your templates folder and name it "block--views--3.tpl.php"
- Add to the classes "content-block"
- Save your changes
- Browse back to Drupal and Flush the page cache
- Inspect the Sidebar Block again using Firebug and notice that the About Us page now looks exactly like the Static HTML version
- Navigate to the other pages and notice that there is still some additional classes that need to be added to the remaining blocks

We could continue creating Block templates for every block however this could be quite tedious and is truly not needed because we have a
module installed called Block Classes which will allow us to add as many classes as we want to Blocks without the need for creating or modifying templates.

- Navigate to "Structure -> Blocks" and click on "configure on the "View: Spotlight" block and notice the Block Class Settings fieldset.

Use Block Class feature inside of Blocks to add the following classes to blocks from Block Administrator
"View: Spotlight" - "feature-collection"
"View: Upcoming" - "feature-block"
"Plan Your Visit" - "feature-block"

"View: Current" - "current-exhibits"
"View: Previous" - "previous-exhibits"
"View: Featured" - "featured-content-block"
"Home Page Content Links" - "content-block last"

"Become A Volunteer" - "feature-block"
"Talk to Us" - "feature-block"

- Close the Blocks Interface and Browse around the SAMOCA Web Site and we will see that are theme is now complete.


If you are needing to create individual Block templates then take a look at the following - http://drupal.org/node/1089656 and scroll down to Blocks
Also if you need more information regarding Block templates you can refer to the documentation located at http://api.drupal.org/api/drupal/modules--block--block.tpl.php/7



BLOCK.TPL.PHP
-------------
<aside class="<?php print $classes; ?>"<?php print $attributes; ?>>

<?php print render($title_prefix); ?>
<?php if ($block->subject): ?>
  <h2<?php print $title_attributes; ?>><?php print $block->subject ?></h2>
<?php endif;?>
<?php print render($title_suffix); ?>
<?php print $content ?>

</aside>



BLOCK--VIEWS--SIDEBAR-EXHIBIT-BLOCK.tpl
---------------------------------------
<aside class="<?php print $classes; ?> feature-block" <?php print $attributes; ?>>

<?php print render($title_prefix); ?>
<?php if ($block->subject): ?>
  <h2<?php print $title_attributes; ?>><?php print $block->subject ?></h2>
<?php endif;?>
<?php print render($title_suffix); ?>
<?php print $content ?>
 
</aside>


BLOCK--BLOCK--3.TPL.PHP
-------------------------
<aside class="<?php print $classes; ?> content-block" <?php print $attributes; ?>>

<?php print render($title_prefix); ?>
<?php if ($block->subject): ?>
  <h2<?php print $title_attributes; ?>><?php print $block->subject ?></h2>
<?php endif;?>
<?php print render($title_suffix); ?>
<?php print $content ?>
 
</aside>