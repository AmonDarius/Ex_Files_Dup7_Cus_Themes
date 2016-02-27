Understanding view templates and variables

Even though are theme is complete I wanted to discuss Views and View templating in general. Most Drupal sites use Views to display data in the form
of Lists of Nodes with various filters and fields being displayed and if you are not familiar with Views take a look at the series just release by Tom Geller
called Drupal 7 - Reporting and Visualizing Data at http://www.lynda.com/Drupal-7-tutorials/Reporting-and-Visualizing-Data/85758-2.html

For the purpose of our theme we will create 2 different Views templates for the simple purpose of cleaning up the HTML being outputted by Drupal
Let's begin by

- Previewing the HTML output by the Upcoming Events view on the Home Page
- Browse to your editor and copy the views-view.tpl.php template from "sites/all/modules/views/theme" to your templates folder
- Let's clean up some of the html by removing the <div> wrapped around the $rows variable and the parent div around the entire view
- Save your changes
- Browse back to Drupal and Flush the page cache
- Inspect the View again using Firebug and notice that a few of the wrapping divs have now been removed


- Browse to your editor and copy the views-view-fields.tpl.php template from "sites/all/modules/views/theme" to your templates folder
- Let's clean up some of the html by removing everything between the  foreach statement:

<?php foreach ($fields as $id => $field): ?>
    <?php print $field->content; ?>
<?php endforeach; ?>

- Save your changes
- Browse back to Drupal and Flush the page cache
- Inspect the View again using Firebug and notice that a few of the wrapping divs have now been removed


Also if you need more information regarding view templates you can refer to the documentation located at http://api.lullabot.com/group/views_templates/7



VIEWS-VIEW.TPL.PHP
------------------
<?php print render($title_prefix); ?>
  <?php if ($title): ?>
    <?php print $title; ?>
  <?php endif; ?>
  <?php print render($title_suffix); ?>
  <?php if ($header): ?>
    <div class="view-header">
      <?php print $header; ?>
    </div>
  <?php endif; ?>

  <?php if ($exposed): ?>
    <div class="view-filters">
      <?php print $exposed; ?>
    </div>
  <?php endif; ?>

  <?php if ($attachment_before): ?>
    <div class="attachment attachment-before">
      <?php print $attachment_before; ?>
    </div>
  <?php endif; ?>

  <?php if ($rows): ?>
   
      <?php print $rows; ?>
    
  <?php elseif ($empty): ?>
    <div class="view-empty">
      <?php print $empty; ?>
    </div>
  <?php endif; ?>

  <?php if ($pager): ?>
    <?php print $pager; ?>
  <?php endif; ?>

  <?php if ($attachment_after): ?>
    <div class="attachment attachment-after">
      <?php print $attachment_after; ?>
    </div>
  <?php endif; ?>

  <?php if ($more): ?>
    <?php print $more; ?>
  <?php endif; ?>

  <?php if ($footer): ?>
    <div class="view-footer">
      <?php print $footer; ?>
    </div>
  <?php endif; ?>

  <?php if ($feed_icon): ?>
    <div class="feed-icon">
      <?php print $feed_icon; ?>
    </div>
  <?php endif; ?>



VIEWS-VIEW-FIELDS.TPL.PHP
--------------------------
<?php foreach ($fields as $id => $field): ?>
    <?php print $field->content; ?>
<?php endforeach; ?>