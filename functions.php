<?php 


	if (current_user_can('manage_options')) { // for admin

		add_theme_support('post-thumbnails');
		add_theme_support('post-formats', array('aside', 'gallery', 'video', 'image')); // Displays post format box in wp-admin

		add_theme_support('menus'); // Adds menus to wp-admin sidebar


	
	} else { // For users other than admin

		add_theme_support('post-formats', array('aside')); // Displays post format box in wp-admin
	
	}


	add_theme_support('custom-header'); // for appearence menu

	add_theme_support('custom-background'); // for appearance menu

	add_theme_support('post-thumbnails'); // add featured image to blog posts in wp-admin

	add_theme_support('post-formats', array('aside', 'gallery', 'video', 'image')); // Displays post format box in wp-admin

	add_theme_support('title-tag'); // Automatically adds title to website without header.php code

	$html5_support = array(
		'search-form',
		'comment-form',
		'gallery',
		'comment-list',
		'captions'
		);

	add_theme_support('html5', $html5_support); // For HTML 5 support


	register_nav_menus(

		array(
			'header_menu' 		=> 'Header Menu',
			'footer_menu'		=> 'Footer Menu',
			'left_sidebar'		=> 'Left Sidebar',
			'header_submenu'	=> 'Header Submenu'
		)
	
	);


	function the_current_year() {
		$this_year = date('Y');
		return $this_year;
	}

	function submenu() {
		wp_deregister_script( 'jquery' );
		wp_register_script( 'jquery', 'http' . ($_SERVER['SERVER_PORT'] == 443 ? 's':''). 'ajax.googleapis.com', false, null );
		wp_enqueue_script( 'script-name' . get_template_directory_uri() . '/js/submenus.js', array('jquery'),'1.0.0', true );
	}

	add_action( 'wp_enqueue_scripts', 'submenu' );





	// Creating Custom post types


	add_action('init', 'create_post_type'); // Initialize the custom post type by calling the function name below
	
	function create_post_type() {

		set_post_thumbnail_size(300,300);

		register_post_type( 
			'cpt',
			array(
				
				'labels'		=> array(
					'name'			=> __('Custom Posts'),
					'singular_name' => __('Custom Post')
					),
				
				'public' 		=> true,
				'has_archive' 	=> true,

				// Support for the custom types by adding taxonomies and support

				'taxonomies'	=> array('category', 'post_tag'), // Adds categories and tags in sidebar of wp-admin
				'supports'		=> array('editor', 'custom-fields', 'thumbnail'), // Adds editor, custom fields, and thumbnail to custom post type in wp-admin

			)
		);
	}


	// Initiate Customizer

	add_action('customize_register', 'initiate_customizer');

	function initiate_customizer($wp_customize) {
		/*
			1. Panels
			2. Section
			3. Controls
			4. Settings
		*/

		$wp_customize->remove_section('title_tagline'); // Removes title/tagline and colors section within the customizer
		$wp_customize->remove_section('colors'); // Removes colors section within customizer
		$wp_customize->remove_section('header_image');
		$wp_customize->remove_section('background_image');
		$wp_customize->remove_section('nav');
		$wp_customize->remove_section('static_front_page');


		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'company_textbox', array(
				'label'		=> __('Company Name', 'complete-theme'),
				'section'	=> 'title_tagline',
				'settings'	=> 'company_name',
			)));

		$wp_customize->add_section(
			'company',
			array(
				'title'		=> __('Company Info', 'complete-theme'),
				'priority'	=> 10, 
			));
		
		
		$wp_customize->add_setting(
			'company_name', 
			array(
				'default' 		=> 'Our Company',
				'transport'		=> 'refresh', // automatically refreshes page on input by user	
			),
		);


		

		$wp_customize->add_setting(
			'company_color', 
			array(
				'default' 		=> '#FF0000',
				'transport'		=> 'refresh', // automatically refreshes page on input by user	
			),
		);

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'company_color_control', array(
				'label'		=> __('Color', 'complete-theme'),
				'section'	=> 'company',
				'settings'	=> 'company_color',
			)));


		$wp_customize->add_panel();
		$wp_customize->remove_panel();
		$wp_customize->get_panel();

		$wp_customize->add_section();
		$wp_customize->remove_section
		$wp_customize->get_section();

		$wp_customize->add_control();
		$wp_customize->remove_control();
		$wp_customize->get_control();

		$wp_customize->add_setting();
		$wp_customize->remove_setting();
		$wp_customize->get_setting();


	}





































?>