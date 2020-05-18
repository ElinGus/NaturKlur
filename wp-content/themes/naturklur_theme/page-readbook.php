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
		<?php
		  endwhile;
		else: ?>

		  <p>Sorry, no posts.</p>

		<?php endif ?>
	</div>
	<div class="readbook__richtext">
		<?php the_field('rich_text'); ?>
	</div>

	<div iframe-container>
		<iframe width="940px" height="610px" src="https://www.yumpu.com/sv/embed/view/acWFh7zDn3QiTyH2" 
		frameborder="1" allowfullscreen="true"  allowtransparency="true"></iframe>
	</div>
</section>



<?php get_footer(); ?>
