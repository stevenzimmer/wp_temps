
	<h1> Tag: <?php single_cat_tag(); ?> </h1>

	

	<!-- Tag Cloud -->

	<?php 


	$header_menu = wp_nav_menu( // Displays the registered menu in a template
		array(
			'theme_location' 	=> 'header_menu',
			'echo'				=> false,
		)
	);

	echo $header_menu;



	wp_nav_menu( // Displays the registered menu in a template
		array(
			'theme_location' 	=> 'header_menu',
			'menu_class'		=> 'menu',
			'menu_id'			=> 'header_complete',
			'fallback_cb'		=> false,
			'before'			=> '-->',
			'after'				=> ' | ',
			'container'			=> 'div',
			'container_id'		=> 'container_id',
			'container_class'	=> 'container_class'
		)
	);

	// Conditional if menu won't display

	if (has_nav_menu('header_menu')) { // Slug for menu item as argument

		// array of attributes for menu to display
	
	} else {
	
		echo 'this is what will display if header menu doesnt exist for whatever reason';
	
	}



	// Submenu/Child menu display

	wp_nav_menu(

		array(
		
			'depth' => 0, // default
			'depth' => 1, // 

		);

	);







	// Display all tags in a cloud
		wp_tag_cloud();


	// Tag cloud options

	$args = array(

		'smallest'	=> 50,
		'largest' 	=> 100,
		'unit'		=> 'px', // or 'points'
		'number'	=> 5, // number of tags to display in a cloud
		'format'	=> 'flat', // Different styles of tag clouds that can be displayed: array, list, and flat (default)
		'separator'	=> ' | ', // what separates each tag from the other
		'order'		=> 'DESC', // ASC is default, and RAND is another value
		'orderby'	=> 'count' // default value is name
		);



	wp_tag_cloud('$args');



	?>


