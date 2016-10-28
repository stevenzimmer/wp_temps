<!-- Theme's Inner pages: Developing a post's template -->

<!-- single.php file -->

<?php 

	echo '<h2>' . get_the_title(); . '</h2>';

	echo '<h4>' . get_the_date() . '</h4>'

	$posts = get_posts();
	
	foreach ($posts as $post) :
	
		setup_postdata($post);
		echo get_the_content();
	
	endforeach;

?>

<!-- alternate of the above loop -->

<?php 

	echo '<h2>' . get_the_title(); . '</h2>';

	echo '<h4>' . get_the_date() . '</h4>'

	
	if (have_posts()) :
		while (have_posts()) : the_post();
		the_content();
		endwhile;
	endif;

	

	/* This section is to display categories and/or tags */

	echo('<section>');

		the_category(', ');

		echo '<br/>';
		
		the_tags('This text replaces the tags text', ' 2nd argument is the separator', '3rd argument is for text to appear after the tags');

	echo ('</section>');


?>

<?php 

	

?>