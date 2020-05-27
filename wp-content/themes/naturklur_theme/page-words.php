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

	<div id="quiz">	
		<?php if( have_rows('question_group') ): $i=1; ?>
			
			<?php while(have_rows('question_group') ) : the_row(); ?>

				<div class="question">
					<p><?php the_sub_field('question'); ?></p>
					<input type="radio" name="answer<?php echo $i; ?>" value="Yes" class="yes" />Yes<br />
					<input type="radio" name="answer<?php echo $i; ?>" value="No" class="no" />No
				</div>
				
		<?php $i++; endwhile; ?>
		<?php else : 
			// no rows found ?>
		<?php endif; ?>
		
		<a id="submit">Submit</a>

	</div>
</section>







	<?php // Slut på loopen.
	endwhile;
	else: ?>
		<p>Sorry, no posts.</p>
	<?php endif ?>



<?php get_footer(); ?>