<?php get_header(); ?>
<?php get_template_part('template-parts/navbar'); ?>

<section class="frontpage">
	<div class="frontpage__text">
		<?php if ( have_posts() ):
			while ( have_posts() ):
				the_post();
		    the_title();
		    the_content();
		?>
	</div>


	<?php // Slutet på wp-loopen
	endwhile;
	else: 
	?>
		<p>Sorry, no posts.</p>
		<?php endif ?>


<?php get_footer(); ?>
