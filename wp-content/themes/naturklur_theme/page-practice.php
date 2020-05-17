<?php get_header(); ?>
<?php get_template_part('template-parts/navbar'); ?>

<section class="practice">
	<div class="practice__text">
		<?php if ( have_posts() ):
			while ( have_posts() ):
				the_post();
		    the_title();
		    the_content();
		?>
	</div>

	<div class="acf">
		<h1 class="acf__heading"><?php the_field('heading'); ?></h1>
		<p class="acf__quest"><?php $shortcode = get_post_meta($post->ID,'question',true);
			echo do_shortcode($shortcode); ?></p>	
	</div>
		    <?php
		  endwhile;
		else: ?>
			<p>Sorry, no posts.</p>
		<?php endif ?>
</section>

<?php get_footer(); ?>
