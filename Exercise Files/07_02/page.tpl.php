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