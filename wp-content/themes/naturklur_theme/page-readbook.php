<?php get_header(); ?>
<?php get_template_part('template-parts/navbar'); ?>

<section class="readbook">
	<div class="readbook__text">
		<?php if ( have_posts() ):
			while ( have_posts() ):
				the_post();
		    the_title();
		    the_content();
		?>		
	</div>



		<div class="readbook__iframe-container">
			<div class="textblock"><?php the_field('rich_text'); ?></div>

			<iframe width="940px" height="610px" src="https://www.yumpu.com/sv/embed/view/acWFh7zDn3QiTyH2" 
			frameborder="1" allowfullscreen="true"  allowtransparency="true"></iframe>
		</div>
	

</section>


	<?php // Slutet på wp-loopen
	endwhile;
	else: ?>
	<p>Sorry, no posts.</p>
	<?php endif ?>

<?php get_footer(); ?>
