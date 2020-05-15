<?php get_header(); ?>
<?php get_template_part('template-parts/navbar'); ?>

<section class="readbook">
	<div class="readbook__text">
		<?php if ( have_posts() ):
			while ( have_posts() ):
				the_post();
		    the_title();
		    the_content();
		?>
		    <?php
		  endwhile;
		else: ?>

		  <p>Sorry, no posts.</p>

		<?php endif ?>
	</div>
</section>


<?php get_footer(); ?>
