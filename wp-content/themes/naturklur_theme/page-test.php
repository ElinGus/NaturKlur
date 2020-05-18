<?php get_header(); ?>
<?php get_template_part('template-parts/navbar'); ?>

<section class="test">
	<div class="test__heading">
		<?php if ( have_posts() ):
			while ( have_posts() ):
				the_post();
		    the_title();
		    the_content();
		?>
	</div>

	<div class="test__word-list">
	
		<?php	// check if the flexible content field has rows of data
			if( have_rows('word_list') ): ?>
				<ul>
				<div class="test__letter">
				<?php	// loop through the rows of data
				while ( have_rows('word_list') ) : the_row(); ?>

					<?php if( get_row_layout() == 'category_letter' ): ?>
							<li><?php the_sub_field('letter'); ?></li>
							<div class="trickywords__letter--underline"></div>
				</div>	

				<div class="test__words">
					<?php elseif( get_row_layout() == 'add_words' ): ?>
						<?php the_sub_field('list_of_words'); ?>
						<?php get_sub_field('words'); ?>


					<?php endif; ?>
				<?php endwhile; ?>
				</div>

				</ul>
				
				
				<?php else :

				// no layouts found

			endif; ?>
	
	</div>


	<?php
	endwhile;
	else: 
	?>
		<p>Sorry, no posts.</p>
		<?php endif ?>
</section>

<?php get_footer(); ?>