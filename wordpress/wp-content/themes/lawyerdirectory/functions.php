<?php 




/* Add Theme Support Page Thumbnails
-------------------------------------------------------------- */

add_theme_support('post-thumbnails');




/* Lawyer Firm CPT 
-------------------------------------------------------------- */


 	
      
   	 
	function lawfirm() {    
    	$args = array(    
        	'label' => __('Lawfirms'),    
        	'singular_label' => __('Lawfirm'),    
        	'public' => true,    
        	'show_ui' => true,
        	'has_archive' => true,	 
        	'capability_type' => 'post',    
        	'hierarchical' => false,    
        	'rewrite' => true,
        	'show_in_rest' => true,    
        	'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )    
       	);    
   	 
    	register_post_type( 'lawfirm' , $args );    
	}  
	
	
	add_action('init', 'lawfirm');
	
	  
	register_taxonomy(
		"lawfirmcat", 
		array("lawfirm"),
		array(
			"hierarchical" => true,
			'show_in_rest' => true,
			"label" => "Lawfirm Cats",
			"singular_label" => "Lawfirm Cat",
			"rewrite" => true
		)); 







		