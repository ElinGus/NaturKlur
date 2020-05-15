<?php get_header(); ?>
<h1>single.php</h1>
<?php if ( have_posts() ):
	while ( have_posts() ):
    the_post();
    the_title();
    the_content();
    wp_link_pages();
  endwhile;
else: ?>

  <p>Sorry, no posts.</p>

<?php endif ?>

<?php get_footer(); ?>
