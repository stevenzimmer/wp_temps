
<!-- Display Wordpress Posts with an array -->

<?php 

	$args = array(

		'post_per_page' => 10, //Displays 10 posts

		'post_type' => 'post', // Display posts only

		'post_type' => 'page', // Displays pages only

		'post_type' => 'countries' //Custom Post Type created with plugin
		
		'post_type' => array('post', 'page'), //Displays both posts and pages

	);



	$post_data = get_posts($args);

	foreach ($post_data as $post) {
		
		echo get_the_title() . '<br/>'; // Displays the post/page title

	}

?>

<?php 

	echo "<h2>Countries</h2>";

	$args = array(
		'post_type' => 'countries',
		'post_per_page' => 8

	);

	$post_data = get_posts($args);

	foreach ($post_data as $post) {

		
		echo "<h3>" . get_the_title() . '</h3>';
		echo get_the_date() . '<br/>';
	}



	echo "<h2>Posts and Pages</h2>";

	$args = array(
	
		'post_type' => array('post', 'page'); // Displays both posts and pages
		'post_per_page' => 8 
	
	);



	$post_data = get_posts($args);
	foreach ($post_data as $post) {

		$link = get_permalink(); //Displays the link for the post/page

		echo '<h3><a href="'.$link . '">' . get_the_title() . '</a></h3>'; // Displays the post/page title in an h3 tag with a permalink
		echo get_the_date() . '<br/>'; // Displays the posts/page published date
	}

?>

<!-- Custom post type UI -->


<!-- Order by Random -->


<?php 

	echo "<h2>Random Rock Bands</h2>";

	$args = array(
		'post_type'     => 'rockbands',
		'orderby'       => 'rand',
		'post_per_page' => 1,
		'category_name' => 'punk-rock,classic-rock'
	);

	$post_data = get_posts($args);
	foreach ($post_data as $post) {
		$link = get_permalink();
		echo '<h3><a href="' . $link . '">' . get_the_title() . '</a></h3>';
	}

?>


<?php 

	$args = array(
	
		'post_type' => 'rockband',
		'orderby'	=> 'post_date', // Ordered by posts' publish date
		'orderby' 	=> 'post_title', // Ordered Alphabetically by posts' title
		'orderby'	=> 'rand',
		'order'		=> 'DESC',
		'order'		=> 'ASC',

	);

	// Custom page template for Custom post type

	// Loop for custom post type

	echo "Custom post type";

	$args = array(
		'post_type' 		=> 'cpt',
		'posts_per_page'	=> 8
		);

	$post_data = get_posts($args);

	foreach ($post_data as $post) {
		echo get_the_title() . '<br/>';
	}

?>
















