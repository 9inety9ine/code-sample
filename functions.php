<?php
	
	//Disable the admin bar on the front end
	show_admin_bar(false);

	//Post thumbnail support
	add_theme_support('post-thumbnails');

	//Register Menus
	register_nav_menus(array(
		'main'         => 'Main Menu',
		'work'         => 'Work Menu'
	));
	
	//Enable wigitized sidebars
	if (function_exists('register_sidebar')) {

		//Widget
		register_sidebar(array(
			'id'            => 'general',
			'name'          => 'General',
			'before_widget' => '<div class="widget widget-general">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3>',
			'after_title'   => '</h3>',
		));
		
	}
	
	//Remove junk from wp_head
	remove_action('wp_head', 'rsd_link'); // Removes the Really Simple Discovery link
	remove_action('wp_head', 'wlwmanifest_link'); // Removes the Windows Live Writer link
	remove_action('wp_head', 'wp_generator'); // Removes the WordPress version
	remove_action('wp_head', 'feed_links', 2); // Removes the RSS feeds
	remove_action('wp_head', 'feed_links_extra', 3); // Removes all other RSS links
	remove_action('wp_head', 'index_rel_link'); // Removes the index page link
	remove_action('wp_head', 'start_post_rel_link', 10, 0); // Removes the random post link
	remove_action('wp_head', 'parent_post_rel_link', 10, 0); // Removes the parent post link
	remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0); // Removes the next and previous post links
	remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0); // Remove shortlink

	add_filter( 'big_image_size_threshold', '__return_false' );
	
	//Custom excerpt size
	function excerpt($limit) {
    	$excerpt = explode(' ', get_the_excerpt(), $limit);
		if (count($excerpt)>=$limit) {
			array_pop($excerpt);
			$excerpt = implode(" ",$excerpt).' ... <a href="'.get_permalink($post->ID).'" class="read-more">'.'read more &rarr;'.'</a>';
		} else {
			$excerpt = implode(" ",$excerpt);
		} 
		$excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
		return $excerpt;
    }
	
	//Check to see if you are on a blog page
	function is_blog() {
		global $post;
		$post_type = get_post_type($post);
		return (
			( is_home() || is_archive() || is_single() )
			&& ($post_type == 'post')
		) ? true : false ;
	}
	
	//Check if on child page
	function is_child($page_id_or_slug) { 
		global $post; 
		if(!is_int($page_id_or_slug)) {
			$page = get_page_by_path($page_id_or_slug);
			$page_id_or_slug = $page->ID;
		} 
		if(is_page() && $post->post_parent == $page_id_or_slug ) {
				return true;
		} else { 
				return false; 
		}
	}
	
	// Load jQuery JS
	//if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
	//function my_jquery_enqueue() {
	   //wp_deregister_script('jquery');
	   //wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js", false, null);
	   //wp_enqueue_script('jquery');
	//}

	/* -------------------------------------------------- PORTFOLIO -------------------------------------------------- */
    add_action('init', 'project_post_type');
    function project_post_type() {
        register_post_type('project', array(
            'labels' => array(
                'name' => 'Projects',
                'singular_name' => 'Project',
                'add_new' => 'Add New',
                'edit_item' => 'Edit',
                'new_item' => 'Add New',
                'view_item' => 'View',
                'search_items' => 'Search',
                'not_found' => 'Nothing found',
                'not_found_in_trash' => 'Nothing found in Trash'
            ),
            'public' => true,
            'has_archive' => false,
            'supports' => array('title'),
            'rewrite' => array( 'slug' => 'project' ),
            'menu_position' => 5
        ));
    }

