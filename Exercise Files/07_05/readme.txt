Understanding node templates and their variables

Based off our static mockup, we are not doing anything special with individual nodes or node types other than cleaning up the HTML
so let's begin by

- Browse to your editor and navigate to the "modules/node" folder and copy the node.tpl.php template to "sites/all/themes/samoca/templates" folder
- Examine the variables available to the node template
- Browse to Drupal and inspect the Node element using Firebug to see the wrapping <div> element around the content
- Browse back to your editor and modify node.tpl.php by removing the wrapper <div> around the node itself and the content variable
- Save your changes
- Browse back to Drupal and Flush the page cache
- Inspect the Node again using Firebug and notice that the wrapping <div> elements are now gone


For our particular theme we have no need to create additional node templates but if you need to know the recommend template suggestions we
can quickly view the documentation at http://drupal.org/node/1089656 and scroll down to Node

Example

- Browse back to Drupal and navigation to the "About Us" page and notice there is no post information for pages
- Navigate to "Structure -> Content Types -> Basic page -> Edit" from the Toolbar
- Scroll down and select "Display settings" and enable "Display author and date information"
- Click "Save content type"
- Navigate to the "About Us" page and notice that post information is now displaying

If you wanted to make sure that "post information" didn't affect your theme we could create a node--page.tpl.php and suppress "post information" from displaying
Let's do this now by

- Browse back to your editor and make a copy of the node.tpl.php template and rename it node--page.tpl.php based off the template suggestions
- Open up node--page.tpl.php and remove the following:

<?php if ($display_submitted): ?>
    <div class="submitted">
      <?php print $submitted; ?>
    </div>
  <?php endif; ?>

- Save your changes
- Browse back to Drupal and Flush the page cache
- Navigate to the "About Us" page and notice that post information is no longer displaying even though we are telling Drupal to display it.

This is the power of tempting and controlling what variables are being displayed by Drupal.  Later on when we explore migrating themes from Drupal 6
to Drupal 7 we will dig a little deeper into Node variables and how to render specific items from the $content array

Also if you need more information regarding node templates you can refer to the documentation located at http://api.drupal.org/api/drupal/modules--node--node.tpl.php/7


NODE.TPL.PHP
--------------
 <?php print $user_picture; ?>

  <?php print render($title_prefix); ?>
  <?php if (!$page): ?>
    <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
  <?php endif; ?>
  <?php print render($title_suffix); ?>

  <?php if ($display_submitted): ?>
    <div class="submitted">
      <?php print $submitted; ?>
    </div>
  <?php endif; ?>

    <?php
      // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
      print render($content);
    ?>
 
  <?php print render($content['links']); ?>
  <?php print render($content['comments']); ?>


NODE--PAGE.TPL.PHP
-------------------
 <?php print $user_picture; ?>

  <?php print render($title_prefix); ?>
  <?php if (!$page): ?>
    <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
  <?php endif; ?>
  <?php print render($title_suffix); ?>

    <?php
      // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
      print render($content);
    ?>
 
  <?php print render($content['links']); ?>
  <?php print render($content['comments']); ?>
