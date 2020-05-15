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

	<div class="acf">
		<h1 class="acf__heading"><?php the_field('heading'); ?></h1>
    <p class="acf__quest"><?php the_field('question'); ?></p>
	</div>
		    <?php
		  endwhile;
		else: ?>
			<p>Sorry, no posts.</p>
		<?php endif ?>
</section>

<?php get_footer(); ?>
