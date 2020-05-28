<?php get_header(); ?>
<?php get_template_part('template-parts/navbar'); ?>

<section class="words">
	<div class="words__heading">
		<?php if ( have_posts() ):
			while ( have_posts() ):
				the_post();
		    the_title();
		    the_content();
		?>


</section>







	<?php // Slut på loopen.
	endwhile;
	else: ?>
		<p>Sorry, no posts.</p>
	<?php endif ?>



<?php get_footer(); ?>