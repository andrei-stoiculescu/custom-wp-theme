<div>
	<?php
		$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
		echo '<div class="offer-header h-75" style="background: url('. $url.'); background-size: cover; position: relative; z-index: 1;">';
	?>

	<div class="offer-title">
    	<h1><?php echo esc_html( get_the_title() ); ?></h1>
    </div>
    <div class="offer-subtitle">
    	<h2>request now</h2>
    </div>
		

</div>

<?php get_header(); ?>



<section class="page-content">
	

<div class="container">
	
		
<?php
    // TO SHOW THE PAGE CONTENTS
    while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
        <div class="entry-content-page">
            <?php the_content(); ?> <!-- Page Content -->
        </div><!-- .entry-content-page -->

    <?php
    endwhile; //resetting the page loop
    wp_reset_query(); //resetting the page query
    ?>


</div>
</section>

<?php get_footer(); ?>