Understanding how regions work and how to render page variables

Regions are areas in a theme that are available for adding blocks of content to. The regions available in the theme are defined within the .info file and in
Drupal 7 the Highlighted and Help regions have been added as default regions.  Also in Drupal 7, $content has became a full region and is now mandatory in all themes. 
This new requirement was set up so that when enabling new themes, Drupal knows where to put the main page content by default.

One thing to note is that if no regions are added to your theme, then the Default Drupal regions will be used.
Lets begin by

- Browse to your editor and open up the samoca.info file located in "sites/all/themes/samoca"
- Add the following Regions

; Regions
regions[featured] = Featured
regions[content] = Content
regions[sidebar] = Sidebar
regions[social] = Social Icons
regions[footer] = Footer
regions[help] = Help
regions[page_top] = Page Top
regions[page_bottom] = Page Bottom

The Content region is mandatory and it is recommend to add Page Top and Page Bottom regions to comply with contributed modules.

- Save your changes
- Browse back to Drupal and Flush the page cache
- Navigate to the Blocks Administration page and review the Regions now displaying
- If they are not then assign the proper blocks to the regions as follows

Featured Region: "View: Spotlight", "View: Upcoming", "Plan your Visit"

Content Region: "Main Page Content", "View: Current", "View: Previous", "View: Featured", "Home Page Content Links"

Sidebar Region: "View: Sidebar Exhibit", "Become A Volunteer", "Talk To Us", "Content Links"

Social Icons Region: "Social Icons"

Footer Region: "Copyright"


Now that we are confident that the proper blocks are assigned to the correct regions we need to make sure that are page templates are printing these regions
so that we can see the static content being replace with the dynamic content from Drupal.  Let's begin by

- Browsing back to your editor and opening up the page--front.tpl.php template
- Replace the content inside the featured wrapper block with <?php print render($page['featured']); ?>
- Save your changes
- Browse back to Drupal and Flush the page cache
- Navigate to the Home page and notice that the Featured sections content has now been replaced

- Browse back to your editor and replace the content inside the "content" wrapper section with <?php print render($page['content']); ?>
- Save your changes
- Browse back to Drupal and Flush the page cache
- Navigate to the Home page and notice that the Content sections content has now been replaced

- Browse back to your editor and replace the content inside the "social-icons" wrapper section with <?php print render($page['social']); ?>
- Save your changes
- Browse back to Drupal and Flush the page cache
- Navigate to the Home page and notice that the Social Icons sections content has now been replaced

- Browse back to your editor and replace the content inside the "footer" wrapper section with <?php print render($page['footer']); ?>
- Save your changes
- Browse back to Drupal and Flush the page cache
- Navigate to the Home page and notice that the Footer sections content has now been replaced

Now let's repeat the process for our Interior Pages.

- Browse back to your editor and open up the page.tpl.php template
- Replace the remaining content inside the main wrapper block with <?php print render($page['content']); ?>
- Save your changes
- Browse back to Drupal and Flush the page cache
- Navigate to the Internal pages and notice that the Content sections content has now been replaced

- Browse back to your editor and Add <?php print render($page['help']); ?> right before the $action_links
- Replace the sidebar wrapper content with <?php print render($page['sidebar']); ?>
- Replace the content inside the "social-icons" wrapper section with <?php print render($page['social']); ?>
- Replace the content inside the "footer" wrapper section with <?php print render($page['footer']); ?>
- Save your changes
- Browse back to Drupal and Flush the page cache
- Navigate to the Internal pages and notice that the remaining sections content has now been replaced


If you need more information regarding assigning content to regions you can refer to the documentation located at http://drupal.org/node/171224


PAGE.TPL.PHP
-------------------
<div id="page">
    <div id="header">
        <div id="logo">
        	<a href="/"></a>
        </div>
        
        <?php if($main_menu): ?>
        <nav id="main-menu">
        	<?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('class' => array('menu', 'links', 'inline', 'clearfix')))); ?>
        </nav>
        <?php endif; ?>
        
    </div>
    
    <?php print $messages; ?>
    
    <section id="main">
    	<div class="wrapper clearfix">
    		<?php print render($title_prefix); ?>
        	<?php if ($title): ?><h1><?php print $title; ?></h1><?php endif; ?>
        	<?php print render($title_suffix); ?>
    		<?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
            <?php print render($page['help']); ?>
            <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
            <?php print render($page['content']); ?>           
            <?php print $feed_icons; ?>
        </div>
    </section>
    
    <section id="sidebar">
    	<div class="wrapper clearfix">
    		<?php print render($page['sidebar']); ?>
    	</div>
    </section>

    <section id="social-icons">
    	<div class="wrapper clearfix">
            <?php print render($page['social']); ?>
        </div>
    </section>
    
    <section id="footer">
    	<div class="wrapper clearfix">
        	<?php print render($page['footer']); ?>
        </div>
    </section>
</div>


PAGE--FRONT.TPL.PHP
--------------------
<div id="page">
    <div id="header">
        <div id="logo">
        	<a href="/"></a>
        </div>
        
        <?php if($main_menu): ?>
        <nav id="main-menu">
        	<?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('class' => array('menu', 'links', 'inline', 'clearfix')))); ?>
        </nav>
        <?php endif; ?>
        
    </div>
    
    <section id="featured">
    	<div class="wrapper clearfix">
            <?php print render($page['featured']); ?>
        </div>
    </section>
    
    <section id="content">
        <div class="wrapper clearfix">        	
            <?php print render($page['content']); ?>
        </div>
    </section>
    
    <section id="social-icons">
    	<div class="wrapper clearfix">
           <?php print render($page['social']); ?>
        </div>
    </section>
    
    <section id="footer">
    	<div class="wrapper clearfix">
        	<?php print render($page['footer']); ?>
        </div>
    </section>
</div>



 