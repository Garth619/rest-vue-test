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
        	// 'taxonomies' => array('lawfirmcat'),
        	'has_archive' => true,	 
        	'capability_type' => 'post',    
        	'hierarchical' => true,    
        	'rewrite' => true,
        	'show_in_rest' => true,    
        	'supports' => array( 'title', 'editor','page-attributes', 'author', 'thumbnail', 'excerpt', 'comments' )    
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
			'rewrite' => array( 'slug' => 'lawyer' )
		)); 




	add_action('init', 'createlawfirmtags');
	
	
	function createlawfirmtags() {
 
// Labels part for the GUI
 
  $labels = array(
    'name' => _x( 'Lawfirm Tags', 'taxonomy general name' ),
    'singular_name' => _x( 'Lawfirm Tag', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Lawfirm Tags' ),
    'popular_items' => __( 'Popular Lawfirm Tags' ),
    'all_items' => __( 'All Lawfirm Tags' ),
    'parent_item' => null,
    'parent_item_colon' => null,
    'edit_item' => __( 'Edit Lawfirm Tag' ), 
    'update_item' => __( 'Update Lawfirm Tag' ),
    'add_new_item' => __( 'Add New Lawfirm Tag' ),
    'new_item_name' => __( 'New Lawfirm Tag Name' ),
    'separate_items_with_commas' => __( 'Separate Lawfirm Tags with commas' ),
    'add_or_remove_items' => __( 'Add or remove topics' ),
    'choose_from_most_used' => __( 'Choose from the most used Lawfirm Tags' ),
    'menu_name' => __( 'Lawfirm Tags' ),
  ); 
 
// Now register the non-hierarchical taxonomy like tag
 
  register_taxonomy('lawfirmtags','lawfirm',array(
    'hierarchical' => false,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'update_count_callback' => '_update_post_term_count',
    'query_var' => true,
    'rewrite' => array( 'slug' => 'lawfirmtags' ),
  ));
}


		