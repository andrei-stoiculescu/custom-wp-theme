<?php get_header(); ?>

	<div class="row">
		<div class="col-sm-12">
			<h1>this is archive-offers.php</h1>

			<?php
$args =  array(
	'post_type' => 'Offers',
	'orderby' => 'price',
	'order' => 'ASC'
);
	$custom_query = new WP_Query( $args );
						while ($custom_query->have_posts()) : $custom_query->the_post(); ?>

<div class="blog-post">
	<h2 class="blog-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	<?php the_excerpt(); ?>
	<?php endwhile; ?>
			</div> <!-- /.col -->
		</div> <!-- /.row -->

	<?php get_footer(); ?>

