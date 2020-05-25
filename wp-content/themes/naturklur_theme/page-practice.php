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

	

	<div class="practice__flexible">

	<div class="practice__icons">
		<div class="practice__icons--icon"></div>
		<div class="practice__icons--icon"></div>
		<div class="practice__icons--icon"></div>
		<div class="practice__icons--icon"></div>
	</div>

		<?php // Check value exists.
		 if( have_rows('flexible_content') ):

			// Loop through rows.
			while ( have_rows('flexible_content') ) : the_row();
			?>
			<div class="practice__flexible--question_text">
			<?php // Question layout.
				if( get_row_layout() == 'question' ):
					get_sub_field('question_text');
					the_sub_field('question_text'); ?>
					 
			</div>
			<div class="practice__flexible--answer_btn">
						
				<?php // Answers layout.
					elseif( get_row_layout() == 'answers' ): ?>	
					<?php get_sub_field('answer_1'); ?>
					<button class="items"><?php the_sub_field('answer_1'); ?></button>	
					
					<?php get_sub_field('answer_2'); ?>
					<button class="items"><?php the_sub_field('answer_2'); ?></button>	
					
					<?php get_sub_field('answer_3'); ?>
					<button class="items"><?php the_sub_field('answer_3'); ?></button>

					<?php get_sub_field('answer_4'); ?>
					<button class="items"><?php the_sub_field('answer_4'); ?></button>	
				
				</div>
				<?php
					endif;
				// End loop.
				endwhile;
			// No value.
			else :
				// Do something...
			endif;
		?>	
	</div>
</section>




	<?php // Slutet på wp-loopen
	endwhile;
	else: 
	?>
	<p>Sorry, no posts.</p>
	<?php endif ?>

<?php get_footer(); ?>
