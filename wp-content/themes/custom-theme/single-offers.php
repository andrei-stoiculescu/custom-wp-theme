<?php get_header(); ?>
<h1>This is single-offers.php</h1>

<div class="blog-post">
	<h2 class="blog-post-title"><?php the_title(); ?></h2>
	<?php if ( has_post_thumbnail() ) {
	the_post_thumbnail();
} ?>	
	<h3>Price: <?php echo get_post_meta($post->ID, 'price', true)?></h3>
	
	<?php the_content(); ?>
</div><!-- /.blog-post -->

<?php get_footer(); ?>