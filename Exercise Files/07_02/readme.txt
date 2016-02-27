Customizing page templates and variables

The page.tpl.php template file focuses on the elements that are displayed between the opening <body> and closing </body> tags and includes the HTML structure of the page.  It also is responsible for
printing the page level regions and other hard-coded variables such as $logo, $site_name, $tabs, $main_menu, etc. Full control of the site layout is possible by manipulating this template.


Creating the Page Template
---------------------------
If we compare the home page of our static html mockup to that of our Drupal instance we can see that the html being output is quite different.
In order for us to modify the Drupal HTML output we need to begin by modifying the page.tpl.php template. Let's begin by

- Browse back to your editor and Copy the index.html file into your "sites/all/themes/samoca/templates" folder and renaming it to page.tpl.php
- Next we need to browse back to your Drupal instance and Flush the Drupal cache since we are overriding the core page.tpl.php template
- Now lets view the page source to see what the HTML output looks like.  Notice the duplication of the html page wrapper, this
  is because we are referencing the HTML output from Drupals html.tpl.php and the hardcoded HTML wrapper from our page.tpl.php
- Browse back to your editor and lets Delete the html and body wrapper from the page.tpl.php
- Browse back to Drupal and Flush the page cache
- Once again view the source code of our Home page and notice that the duplicated HTML wrapper is now gone

While we could technically say we were done theming, we only have about 10% Dynamic content being displayed.  In order to remove more of the
static HTML we need to start replacing HTML with Drupal's page variables.  

- Begin by browsing to the "modules/system" and open up the Core page.tpl.php template

The available variables consist of General utility, Site identity, Navigational and Page content along with Regions that can be rendered

Lets begin by replacing the static menu with Navigation Variables

- First we will need to replace the <ul class="menu"> section of html with the print array statement for main_menu from the page.tpl.php drupal template


<?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('id' => 'main-menu', 'class' => array('links', 'inline', 'clearfix')), 'heading' => t('Main menu'))); ?>


- Save your changes
- Browse back to Drupal and Flush the page cache
- Notice the menu has shifted down and there is an additional heading labeled "Main Menu" being displayed
- Browse back to your editor and modify the print array statement by removing the reference to the "heading"
- Save your changes
- Browse back to Drupal and Flush the page cache
- Notice the heading is gone but the menu is still shifted down
- Browse back to your editor and remove the id attribute 'id' => 'main-menu' and add 'menu' class attribute to print array
- Save your changes
- Browse back to Drupal and Flush the page cache
- Notice that the menu has now shifted back up and the CSS is properly targeting the HTML output

Let's continue replacing static content with page variables

- Browse back to your editor and add

<?php print $messages; ?> 

- right above the main <section> element so that any errors or messages outputted by Drupal can be displayed
- Save your changes
- Browse back to Drupal and Flush the page cache
- Notice the cleared cache message now being displayed
- Browse back to your editor and replace the Page Title with 

<?php print render($title_prefix); ?>
<?php if ($title): ?><h1><?php print $title; ?></h1><?php endif; ?>
<?php print render($title_suffix); ?> 

- Save your changes
- Browse back to Drupal and Flush the page cache
- Notice the Page Title is now changing if you navigate from page to page
- Browse back to your editor and add

<?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>

- right after page title
- Save your changes
- Browse back to Drupal and Flush the page cache
- Notice the tabs now being displayed
- Browse back to your editor and add

<?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>

- right after $tabs
- Add $feed_icons right before the closing wrapper for the main <section> element

<?php print $feed_icons; ?>

- Add $feed_icons variable before closing <div> on main wrapper
- Save your changes
- Browse back to Drupal and Flush the page cache

Currently we have created only a single page.tpl.php template which will act as the template for the whole site but if we take a look at our home page and our interior pages the layout is extremely different.
We can create more than one page.tpl but what do we call it and how does Drupal know which one to use.  If we browse to http://drupal.org/node/1089656 and scroll down to Page Template suggestions we can
see that page--[front|internal/path].tpl.php are suggested names.  Taking this into account

- Browse back to your editor and make a copy of the page.tpl.php template and name it page--front.tpl.php as the remaining static html best suits the layout for our home page
- Close the page--front.tpl.php template as we will not need it again until a little later
- Next copy the aboutus.html page from the Exercise folder to your "sites/all/themes/samoca" folder
- Notice that the aboutus page has areas for the main content and a right sidebar

For sake of having to repeat the same steps involved in replacing the page variables we will
- Replace the HTML content with that from the Readme.txt file labeled page.tpl.php
- Save your changes
- Browse back to Drupal and Flush the page cache
- Click on the Home Page and then any of the interior pages and notice that the content is now changing based off our templates and how Drupal handles template suggestions


If you need more information regarding the page.tpl.php template then you can refer to the documentation located at http://api.drupal.org/api/drupal/modules--system--page.tpl.php/7


PAGE.TPL.PHP
-------------
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
            
            <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
            	
            
            <figure class="img-full">
            	<img src="sites/all/themes/samoca/assets/images/aboutus.jpg" width="546" height="232" />
            </figure>
            <h2>Celebrating the Best of Modern Art</h2>
            <p>SAMOCA (San Angelico Museum of Contemporary Art) is a museum with a focus on modern art from the last 75 years. Since its inception in 1973, the museum has been the leader in representing modern contemporary art and design. The museum is located in the heart of Ventura, California, ninety miles north of Los Angeles.</p>
    		<h3>An Introduction</h3>
            <p>SAMOCA was established in honor of Saint Angelico, and tasked with promoting the enrichment and furtherment of the arts. It hosts a creative mixture of visual and performing arts alongside music and crafts, suitable for the entire family. The museum also spotlights the unique talents and accomplishments of up-and-coming artists found within the diverse and daring California community and beyond.</p>
        	<p>Our collections are designed to highlight the importance of contemporary art within modern society. Important influences, such as popular music, cinema, and current world events, are reflected in our halls. Through our diverse collections, events, and with the support of our patrons and volunteers, the museum helps to promote the importance of modern art around the world.</p>
        	<p class="read-more"><a href="/">Volunteer Opportunities &raquo;</a></p>
            <p class="read-more"><a href="askus.html">Ask Us A Questions &raquo;</a></p>
            
            <?php print $feed_icons; ?>
        </div>
    </section>
    
    <section id="sidebar">
    	<div class="wrapper clearfix">
    		
            <aside class="feature-block">
                <h3>Current Exhibits</h3>
                <img src="sites/all/themes/samoca/assets/images/current_events.jpg" width="291" height="154" />
                <div class="block-wrapper">
                    <h4 class="exhibit-title">VISION: New Works from the SAMOCA Collection</h4>
                    <p class="exhibit-date">January 5 - December 12, 2012</p>
                    <p>New work from the SAMOCA permanent collection, including new artists Simone Best, Sheldon Crane, and Elizabeth Moore.</p>
                    <p class="read-more"><a href="/">learn more &raquo;</a></p>
                </div>
            </aside>
            
            <aside class="content-block">
            	<ul class="content-links">
                	<li class="item-one"><a href="/">Volunteers Needed &raquo;</a></li>
                	<li class="item-two"><a href="/">New Cafe Menu &raquo;</a></li>
                    <li class="item-three"><a href="/">Family Programs &raquo;</a></li>
                </ul>
            	<address>Hours:<br>
				Tuesday - Saturday 10:00 AM - 6:00 PM<br>
				Sunday 12:00 PM - 4:00 PM<br>
				Closed Mondays</address>
            </aside>
    
    	</div>
    </section>

    <section id="social-icons">
    	<div class="wrapper clearfix">
            <ul>
                <li class="facebook"><a href="/"></a></li>
                <li class="twitter"><a href="/"></a></li>
            </ul>
        </div>
    </section>
    
    <section id="footer">
    	<div class="wrapper clearfix">
        	<p>@copy; San Angelico Museum of Contemporary Art,123 Main Street, Ventura, CA 12345 (800)555-1212</p>
        </div>
    </section>
</div>



PAGE--FRONT.TPL.PHP
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
    
    <section id="featured">
    	<div class="wrapper clearfix">
            <aside class="feature-collection">
                <figure>
                    <img src="sites/all/themes/samoca/assets/images/collections/featured_collection.jpg" />
                    <figcaption>
                        <a href="/">
                        <h2>Vision</h2>
                        <span>New works from the <br /><strong>SAMOCA</strong> Collection</span>
                        </a>
                    </figcaption>
                </figure>
            </aside>
        
            <aside class="feature-block">
                <h3>Upcoming Events</h3>
                <div class="block-wrapper">
                    <div class="event">
                        <img src="sites/all/themes/samoca/assets/images/thumbnails/featured_thumbnail.jpg" width="49" height="49" class="img-left" />
                        <h4 class="title">Paul Shellington:<br />Bird Watching</h4>
                        <p class="date">April 5, 2012 - June 30, 2012</p>
                    </div>
                    <p class="read-more"><a href="/">learn more &raquo;</a></p>
                </div>
            </aside>
        
            <aside class="feature-block">
                <h3>Plan your visit</h3>
                <div class="block-wrapper">
                    <p>View an exhibition, attend a performance, and find time to enjoy casual dining in our café. It's a great place to meet your friends and learn more about the arts.</p>
                    <p class="read-more"><a href="/">learn more &raquo;</a></p>
                </div>
            </aside>
        </div>
    </section>
    
    <section id="content">
        <div class="wrapper clearfix">
        	
            <aside class="content-block">
            	<img src="sites/all/themes/samoca/assets/images/thumbnails/news_thumbnail.jpg" width="293" height="121" />
            	<h3>Recent Acquisitions<br />New Jacob Mars</h3>
                <p>The SAMOCA board of directors are pleased to announce the acquisition of a wide range of works, including new artist Jacob Mars.</p>
            	<p class="read-more"><a href="/">learn more &raquo;</a></p>
            </aside>
            
            <aside class="content-block">
            	<img src="sites/all/themes/samoca/assets/images/thumbnails/event_thumbnail.jpg" width="293" height="121" />
            	<h3 class="title">Paul Shellington: Bird Watching</h3>
				<p class="date">April 5-June 30 2012</p>
				<p>Paul Shellington’s Ventura debut! Fun, whimsical illustrations direct from Britain - in town for a limited special engagement.</p>
				<p class="read-more"><a href="/">learn more &raquo;</a></p>
            </aside>
            
            <aside class="content-block last">
            	<ul class="content-links">
                	<li class="item-one"><a href="/">Volunteers Needed &raquo;</a></li>
                	<li class="item-two"><a href="/">New Cafe Menu &raquo;</a></li>
                    <li class="item-three"><a href="/">Family Programs &raquo;</a></li>
                </ul>
            	<address>Hours:<br>
				Tuesday - Saturday 10:00 AM - 6:00 PM<br>
				Sunday 12:00 PM - 4:00 PM<br>
				Closed Mondays</address>
            </aside>
        </div>
    </section>
    
    <section id="social-icons">
    	<div class="wrapper clearfix">
            <ul>
                <li class="facebook"><a href="/"></a></li>
                <li class="twitter"><a href="/"></a></li>
            </ul>
        </div>
    </section>
    
    <section id="footer">
    	<div class="wrapper clearfix">
        	<p>&copy; San Angelico Museum of Contemporary Art,123 Main Street, Ventura, CA 12345 (800)555-1212</p>
        </div>
    </section>
</div>