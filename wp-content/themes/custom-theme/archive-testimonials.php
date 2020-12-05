<div>
	<?php
		$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
		echo '<div class="offer-header h-75" style="background: url('. $url.'); background-size: cover; position: relative; z-index: 1;">';
	?>

	<div class="offer-title">
    	<h1>Offers</h1>
    </div>
    <div class="offer-subtitle">
    	<h2>request now</h2>
    </div>
		

</div>

<?php get_header(); ?>

	

<section class="offers-area">
	
<div class="container">
  <div class="row justify-content">
    <?php $the_query=new WP_Query( array( 'post_type'=> 'testimonials' ) ); ?>
    <?php if ( $the_query->have_posts() ) : ?>
    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
    <!--<?php $featured_img_url=get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>-->
    <div class="col-lg-4 col-sm-6 mb-4 d-flex align-items-stretch">
      <div class="card mb-2 shadow">
       <!-- <img class="card-img-top" src="<?php echo $featured_img_url ?>" alt="">-->
        <div class="card-body">
          <h4 class="card-title"><?php the_title(); ?></h4>
          <p class="card-text"><?php the_excerpt(); ?></p>
          <a class="btn btn-dark" href="<?php print get_permalink($post->ID) ?>">Read more</a>
        </div>
      </div>
    </div>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
    <?php else : ?>
    <p>
      <?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?>
    </p>
    <?php endif; ?>
  </div>
</div> <!-- .container -->

</section>


	<?php get_footer(); ?>

