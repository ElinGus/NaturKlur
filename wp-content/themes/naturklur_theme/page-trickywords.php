<?php get_header(); ?>
<?php get_template_part('template-parts/navbar'); ?>

<section class="tricky-words">
	<div class="tricky-words__heading">
	<?php if ( have_posts() ):
			while ( have_posts() ): ?>
				<?php the_post(); ?>
				<h1><?php the_title();?></h1>
				<?php the_content(); ?>
	</div>

	<div class="tricky-words__accordion">
		<div class="tricky-words__rich-text">
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