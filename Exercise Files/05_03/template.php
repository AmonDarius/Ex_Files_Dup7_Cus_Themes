<?php

	// ADD REFERENCE TO EXTERNAL STYLESHEET
	function bartiksub_preprocess_html(&$variables) {
  		drupal_add_css('http://fonts.googleapis.com/css?family=News+Cycle', array('type' => 'external'));
		
		drupal_add_js('http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.0.6/modernizr.min.js', 'external');
	} 
	
	