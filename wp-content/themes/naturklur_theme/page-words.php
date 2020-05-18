<?php get_header(); ?>
<?php get_template_part('template-parts/navbar'); ?>

<section class="trickywords">
	<div class="trickywords__heading">
		<?php if ( have_posts() ):
			while ( have_posts() ):
				the_post();
		    the_title();
		    the_content();
		?>
	</div>

	<div class="trickywords__letter">
		<?php the_field('category_letter'); ?>
		<div class="trickywords__letter--underline"></div>
	</div>
	<div class="trickywords__words">
	<?php

// check if the repeater field has rows of data
if( have_rows('words') ):
 	// loop through the rows of data
    while ( have_rows('words') ) : the_row();
        // display a sub field value
        the_sub_field('the_word');

    endwhile;

else :

    // no rows found

endif;

?>
	</div>



	<?php
	endwhile;
	else: ?>
		<p>Sorry, no posts.</p>
	<?php endif ?>
</section>

<?php get_footer(); ?>