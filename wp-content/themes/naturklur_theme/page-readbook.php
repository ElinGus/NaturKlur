<?php get_header(); ?>
<?php get_template_part('template-parts/navbar'); ?>

<section class="readbook">
	<div class="readbook__heading">
	<?php if ( have_posts() ):
			while ( have_posts() ): ?>
				<?php the_post(); ?>
				<h1><?php the_title();?></h1>
				<?php the_content(); ?>	
	</div>

		<div class="readbook__iframe-container">
			<div class="readbook__iframe-container--textblock"><?php the_field('rich_text'); ?></div>

			<!--<iframe width="940px" height="610px" src="https://www.yumpu.com/sv/embed/view/acWFh7zDn3QiTyH2" 
			frameborder="1" allowfullscreen="true"  allowtransparency="true"></iframe>-->

			<style>.embed-container { position: relative; padding-bottom:56.25%; height:0; overflow: hidden; max-width: 100%; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%;}</style><div class='embed-container' data-page-width='500' data-page-height='500' id='ypembedcontainer' ><iframe   src="https://www.yumpu.com/sv/embed/view/vWHQjhZMz016qma9" frameborder="0" allowfullscreen="true"  allowtransparency="true"></iframe></div><script src='https://players.yumpu.com/modules/embed/yp_r_iframe.js' ></script>


			
		</div>
	

</section>


	<?php // Slutet på wp-loopen
	endwhile;
	else: ?>
	<p>Sorry, no posts.</p>
	<?php endif ?>

<?php get_footer(); ?>
