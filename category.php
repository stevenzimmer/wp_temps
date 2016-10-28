<!-- Categories archive page -->

<!-- category.php -->

	<h1>Category: <?php single_cat_title(); ?></h1>
	<h3><?php ?></h3>

	<?php 

		// The Loop

		while (have_posts()) : the_post();
	
	?>

	<h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
	
	<small><?php the_time('F jS, Y') ?> by <?php the_author_posts_link(); ?></small>

	<div class="entry">

		<?php the_content(); ?>

		<p class="postmetadata"> <?php comments_popup_link('No Comments yet')?></p>

	</div>
	
	<?php 

		endwhile;

	?>

	<?php 

	// Conditional categories by adding title of catefory in if statement

		if (is_category('Glam Metal')) {
			echo "this is the glam metal category";
		} elseif (is_category('Website')) {
			echo "This is a regular website category";
		} else {
			echo "this falls under every other category";
		}

	?>
