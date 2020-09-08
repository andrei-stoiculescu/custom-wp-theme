
<?php get_header(); ?>

<div class="header-container-text header-overlay h-100">
  <div class="d-flex align-items-center flex-column justify-content-center h-100 p-4">
    <h1 class="display-4 bold">Discover Romania</h1>
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</p>
    <button type="button" class="btn custom-btn">Book now</button>
  </div>
</div>


<div id="owl-header" class="owl-carousel owl-theme">
  <div class="owl-slide cover" style="background-image: url(https://emerging-europe.com/wp-content/uploads/2019/03/bigstock-gorgeous-spring-countryside-la-280866130-990x556.jpg);"></div>
  <div class="owl-slide cover" style="background-image: url(https://booksandbao.com/wp-content/uploads/2020/01/majkl-velner-nKY59_d9FlA-unsplash-1600x1067.jpg);"></div>
  <div class="owl-slide cover" style="background-image: url(https://cdn.kimkim.com/files/a/content_articles/featured_photos/32efe52768060fa172de0f052d3527f53cdfb58a/big-0c5409996c6e87912a9401bb9695d679.jpg);"></div>
</div>
</header>

<div class="container">

<h1>This is home.php</h1>
	<div class="row">
		<div class="col-sm-8 blog-main">

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
<?php get_footer(); ?>