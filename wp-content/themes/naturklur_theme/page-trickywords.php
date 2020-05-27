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


	<div class="test__rich-text">
		<?php the_field('rich_text'); ?>
	</div>
	
	<?php
	// check if the repeater field has rows of data
	if( have_rows('accordion') ):
		
		// loop through the rows of data for the tab header
		while ( have_rows('accordion') ) : the_row();
			
			$word = get_sub_field('word');
			$description = get_sub_field('description');
	?>
			<button class="accordion">
				<?php echo $word; ?>
			</button>
			
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

</section>	
	




	<?php // Slutet på wp-loopen
	endwhile;
	else: 
	?>
		<p>Sorry, no posts.</p>
		<?php endif ?>


<?php get_footer(); ?>