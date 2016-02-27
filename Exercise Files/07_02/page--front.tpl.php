<?php

/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 */
?>

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