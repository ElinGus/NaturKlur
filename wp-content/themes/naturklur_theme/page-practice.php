<?php get_header(); ?>
<?php get_template_part('template-parts/navbar'); ?>

<section class="practice">
	<div class="practice__text">
	<?php if ( have_posts() ):
			while ( have_posts() ): ?>
				<?php the_post(); ?>
				<h1><?php the_title();?></h1>
				<?php the_content(); ?>
	</div>
</section>


<section>
<div class="result" id="results"></div>
<div class="practice" id="exercises"></div>
<div class="buttonsContainer">
	<button class="previousBtn" id="previous">Previous Question</button>
	<button class="nextBtn" id="next">Next Question</button>
	<button class="submitBtn" id="submit">Submit Quiz</button>
</div>
</section>







	<?php // Slutet på wp-loopen
	endwhile;
	else: 
	?>
	<p>Sorry, no posts.</p>
	<?php endif ?>

<?php get_footer(); ?>
