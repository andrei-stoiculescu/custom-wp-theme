<?php get_header(); ?>
<div class="container">
	<div class="row">
		<div class="col-sm-8 blog-main">
			<h1>this is index.php</h1>

			<?php
			if ( have_posts() ) : while ( have_posts() ) : the_post();
        get_template_part( 'content', get_post_format() );
			endwhile; ?>
<!-- pagination start -->
<nav>
	<ul class="pagination">
		<li class="page-item"><?php next_posts_link( 'Previous' ); ?></li>&nbsp;
		<li class="page-item"><?php previous_posts_link( 'Next' ); ?></li>
	</ul>
</nav>
<!-- pagination start end -->
<?php
		endif;
			?>

		</div> <!-- /.blog-main -->

		<?php get_sidebar(); ?>
	</div> <!-- /.row -->
</div> <!-- /.container -->
<?php get_footer(); ?>
