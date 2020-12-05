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




<section class="highlights-area">
    <div class="container">
        <div class="offer-section-title text-center">
            <h2>Highlights of Romania</h2>
        </div>
        <div class="row">
            <div id="owl-highlights" class="owl-carousel owl-theme">
                <div class="item">
                    <img src="https://i.imgur.com/SRbD3ya.jpg" alt="Owl Image">
                    <div class="highlight-title">
                        <p>Palace of Parliament, Bucharest</p>
                    </div>
                </div>
    
               <div class="item">
                    <img src="https://i.imgur.com/SRbD3ya.jpg" alt="Owl Image">
                    <div class="highlight-title">
                        <p>Bran Castle, Bran</p>
                    </div>
                </div>
                <div class="item">
                    <img src="https://i.imgur.com/SRbD3ya.jpg" alt="Owl Image">
                    <div class="highlight-title">
                        <p>Painted Monasteries of Bucovina</p>
                    </div>
                </div>
                <div class="item">
                    <img src="https://i.imgur.com/SRbD3ya.jpg" alt="Owl Image">
                    <div class="highlight-title">
                        <p>Wooden Churches of Maramures</p>
                    </div>
                </div>
                <div class="item">
                    <img src="https://i.imgur.com/SRbD3ya.jpg" alt="Owl Image">
                    <div class="highlight-title">
                        <p>Cluj Napoca</p>
                    </div>
                </div>
                <div class="item">
                    <img src="https://i.imgur.com/SRbD3ya.jpg" alt="Owl Image">
                    <div class="highlight-title">
                        <p>Saxon villages and fortified churches</p>
                    </div>
                </div>
                 <div class="item">
                    <img src="https://i.imgur.com/SRbD3ya.jpg" alt="Owl Image">
                    <div class="highlight-title">
                        <p>Driving the Transfagarasan road</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>






<section class="gallery">
	<div class="container">
		<div class="offer-section-title text-center">
			<h2>Gallery</h2>
		</div>
			
		<div class="embed-responsive embed-responsive-16by9">
	 		<iframe src="https://player.vimeo.com/video/248633434?&byline=0&portrait=0&controls=0" width="640" height="360" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
		</div>

		<div class="instagram-feed" id="instagram-feed"></div>

	</div>

</section>

<div class="container spacer">
<p>&nbsp;</p>
	
</div>


















<?php get_footer(); ?>