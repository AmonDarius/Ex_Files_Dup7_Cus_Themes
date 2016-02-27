Understanding the new Region templates and how to render page variables

Although not much is documented about Regions and their use they do give us as a Themer with ability to modify the HTML a Region wraps around the content.
We will use this advantage in cleaning up the HTML output inside of Drupal 7

Let's begin by
- Browse to your editor and navigate to the "modules/system" folder and copy the region.tpl.php template to "sites/all/themes/samoca/templates" folder
- Examine the variables available to the region template
- Browse to Drupal and inspect the Regions using Firebug to identify the wrapping <div> element around the content being output by each region
- Browse back to your editor and modify region.tpl.php and remove the wrapping div that is places around the content so that it looks like

<?php if ($content): ?>
    <?php print $content; ?>
<?php endif; ?>

- Save your changes
- Browse back to Drupal and Flush the page cache
- Inspect the Region again using Firebug and notice that the wrapping <div> element is now gone

For our particular theme we have no need to create additional region templates but if you need to know the recommend template suggestions we
can quickly view the documentation at http://drupal.org/node/1089656 and scroll down to Region

Also if you need more information regarding the new Region template you can refer to the documentation located at http://api.drupal.org/api/drupal/modules--system--region.tpl.php/7




REGION.TPL.PHP
--------------
<?php if ($content): ?>
    <?php print $content; ?>
<?php endif; ?>