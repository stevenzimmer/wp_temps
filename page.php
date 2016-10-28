<!-- Theme's Inner pages: Developing a post's template -->

<!-- page.php file -->

<?php 


	if(have_posts()):

		while(have_posts()) : the_post():
		
			echo "Written by: ";
		
			the_author(); // Published Author's name
		
			the_content(); // The content of the page Content automatically echoed
		
		endwhile;
	
	endif;

	/* Comments Section */
	
	comments_template();



?>


<?php 

	
	if(have_posts()):
	
		while(have_posts()) : the_post() :
	
			$content = substr(get_the_content(),0,100); // need to prepend 'the_content' with 'get_' because it is being revised into an excerpt with substr function

			echo $content;
	
		endwhile;
	
	endif;


	/* Comments Section */
	
	comments_template();

?>


























