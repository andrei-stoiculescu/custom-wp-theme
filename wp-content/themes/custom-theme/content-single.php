<div class="blog-post">
	<h2 class="blog-post-title"><?php the_title(); ?></h2>
	<p class="blog-post-meta"><?php the_date(); ?> by <a href="#"><?php the_author(); ?></a></p>
	<?php if ( has_post_thumbnail() ) {
	the_post_thumbnail();
} ?>
	<p>this is content-single</p>
	<?php the_content(); ?>
</div><!-- /.blog-post -->