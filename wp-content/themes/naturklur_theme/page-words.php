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

	<div class="test__rich-text"><?php the_field('rich_text'); ?></div>
	
	<?php
	// check if the repeater field has rows of data
	if( have_rows('accordion') ):
		
		// loop through the rows of data for the tab header
		while ( have_rows('accordion') ) : the_row();
			
			$word = get_sub_field('word');
			$description = get_sub_field('description');

	?>
			<button class="accordion"><?php echo $word; ?></button>
			
			<div class="panel">
				<p><?php echo $description; ?></p>
			</div>    
		<?php
		endwhile; //End the loop 

	else :

		// no rows found
		echo 'Come back tomorrow';

	endif;

	?>







	
	<div class="trickywords__word-list">
		<?php	// check if the flexible content field has rows of data
			if( have_rows('word_list') ): ?>		
					
				<?php while ( have_rows('word_list') ) : the_row(); ?>
				<?php if( get_row_layout() == 'category_letter' ): ?>
				<div class="trickywords__word-list--letter"><?php the_sub_field('letter'); ?></div>
				<div class="trickywords__word-list--underline"></div>
					
			<div class="trickywords__words">
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
	else: ?>
		<p>Sorry, no posts.</p>
	<?php endif ?>
</section>

<?php get_footer(); ?>