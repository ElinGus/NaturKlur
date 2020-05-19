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
					
				<?php while ( have_rows('word_list') ) : the_row(); ?>
				<?php if( get_row_layout() == 'category_letter' ): ?>
				<div class="test__word-list--letter"><?php the_sub_field('letter'); ?></div>
				<div class="test__word-list--underline"></div>
					
			<div class="test__words">
				<ul>
					<?php elseif( get_row_layout() == 'add_words' ): ?>			
						<?php if( have_rows('list_of_words') ): ?>
							<?php while ( have_rows('list_of_words') ) : the_row(); ?>
								<li <?php if( get_sub_field('words') )?>>
									<?php the_sub_field('words'); ?>
								</li>
							<?php endwhile; ?>
						<?php endif; ?>									
					<?php endif; ?>
				<?php endwhile; ?>
				</ul>
			</div>
				
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