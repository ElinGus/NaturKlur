<?php get_header(); ?>
<?php get_template_part('template-parts/navbar'); ?>

<section class="words">
	<div class="words__heading">
	<?php if ( have_posts() ):
			while ( have_posts() ): ?>
				<?php the_post(); ?>
				<h1><?php the_title();?></h1>
				<?php the_content(); ?>
</section>

<section>
<div class="result" id="results"></div>
<div class="practice" id="exercises"></div>
<div class="buttonsContainer">
	<button class="previousBtn" id="previous">Förra frågan</button>
	<button class="nextBtn" id="next">Nästa fråga</button>
	<button class="submitBtn" id="submit">Ditt resultat</button>
</div>
</section>



	<?php // Slut på loopen.
	endwhile;
	else: ?>
		<p>Sorry, no posts.</p>
	<?php endif ?>



<?php get_footer(); ?>