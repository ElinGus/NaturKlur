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
	
	<div class="frontpage__pagefields">
		<div class="frontpage__pagefields--textblock"><?php the_field('startsida_textblock'); ?></div>

		<div class="frontpage__pagefields--image">
			<?php 
			$image = get_field('startsida_bild');
			if( !empty( $image ) ): ?>
				<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
			<?php endif; ?>
		</div>
	</div>

</section>



	<?php // Slutet på wp-loopen
	endwhile;
	else: 
	?>
		<p>Sorry, no posts.</p>
		<?php endif ?>


<?php get_footer(); ?>
