<div>
	<?php
		$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
		echo '<div class="offer-header h-75" style="background: url('. $url.'); background-size: cover; position: relative; z-index: 1;">';
	?>

	<div class="offer-title">
    	<h1><?php the_title(); ?></h1>
    </div>
    <div class="offer-subtitle">
    	<h2>Offer subtitle</h2>
    </div>
		

</div>

<section class="offer-details">
<div class="container">
<div class="row text-center">
	
	<div class="col-md-3 ">
		<div class="">
			<div class="">
				<h6 class="stats-title">Days</h6>
				<h3 class="">7</h3>
			</div>
		</div>
	</div>

	<div class="col-md-3">
		<div class="">
			<div class="">
				<h6 class="stats-title">Style</h6>
				<h3 class="">Adventure</h3>
			</div>
		</div>
	</div>

	<div class="col-md-3">
		<div class="">
			<div class="">
				<h6 class="stats-title">Starting from</h6>
				<h3 class=""><?php echo get_post_meta($post->ID, 'price', true)?><small> &euro;</small></h3>
			</div>
		</div>
	</div>

	<div class="col-md-3">
		<a class="btn offer-custom-btn">Request offer</a>
	</div>


</div>


<div class="share-buttons text-center">
<p>Share</p>
<a class="fa fa-facebook" href="http://www.facebook.com/sharer.php?u=<?php echo get_permalink(get_the_ID());?>" target="_blank"></a>
  <a class="fa fa-twitter" href="https://twitter.com/share?url=<?php echo get_permalink(get_the_ID());?>&amp;text=See%20this%20offer%20on&amp;hashtags=triptailor" target="_blank"></a>
   <a class="fa fa-linkedin" href="http://www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo get_permalink(get_the_ID());?>" target="_blank"></a>
<a class="fa fa-whatsapp" href="whatsapp://send?text=<?php echo get_permalink(get_the_ID());?>" data-action="share/whatsapp/share"></a>

   
</div>

</div>
</section>
<?php get_header(); ?>



<div class="container py-2">
   <div class="offer-section-title text-center">
            <h2>Itinerary</h2>
        </div>


<?php while ( have_posts() ) : the_post(); ?>
<?php $array  = get_post_meta($post->ID, '_itinerary_text', true);




$isFirst = true;


foreach($array as $key => $value){
    $day_number = $key + 1;
    
    echo "<div class='row'>";
    echo "<div class='col-auto text-center flex-column d-none d-sm-flex'>";
    echo "<div class='row h-50'>";
        if($isFirst){
        echo "<div class='col'>&nbsp;</div>";
        }else{
        echo "<div class='col  border-right'>&nbsp;</div>";
        }
        $isFirst = false;
    echo "<div class='col'>&nbsp;</div>";
    echo " </div>";            
    echo "<h5 class='m-2'>";
    echo "<span class='badge badge-pill bg-light border'>&nbsp;</span>";
    echo "</h5>";   
    echo "<div class='row h-50'>";
    echo "<div class='col border-right'>&nbsp;</div>";   
    echo "<div class='col'>&nbsp;</div>";   
    echo " </div>";  
    echo "</div>";   
    echo "<div class='col py-2'>";  
    echo "<div class='card border shadow'>";
    echo "<div class='card-body'>";     
    echo " <div class='float-right text-muted'>";
        $date = get_post_meta( get_the_ID(), '_tour_dates', true );
            if (!empty($date)){
                echo date('d-m-Y', strtotime($date. ' + ' .$key. 'days'));
            }
    echo "</div>";
    echo "<h4 class='card-title'>Day ".$day_number. " sbtle</h4>";   
    echo "<p class='card-text'>".$value."</p>";  
    echo "</div>";   
    echo "</div>";   
    echo "</div>";   
    echo "</div>";             
}
?>

<?php endwhile; // end of the loop. ?>

</div>

















<section class="offer-inclusions">
<div class="container">
	<div class="offer-section-title text-center">
		<h2>Inclusions</h2>
	</div>
	<div class="p-0 bg-white rounded shadow mb-5">
	    <ul id="included" role="tablist" class="nav nav-tabs nav-pills flex-column flex-sm-row text-center border-0 ">
	      <li class="nav-item flex-sm-fill">
	        <a id="included-tab" data-toggle="tab" href="#included" role="tab" aria-controls="included" aria-selected="true" class="nav-link border-0 text-uppercase font-weight-bold active">Included</a>
	      </li>
	      <li class="nav-item flex-sm-fill">
	        <a id="not-included-tab" data-toggle="tab" href="#not-included" role="tab" aria-controls="not-included" aria-selected="false" class="nav-link border-0 text-uppercase font-weight-bold">Not included</a>
	      </li>
	      <li class="nav-item flex-sm-fill">
	        <a id="notes-tab" data-toggle="tab" href="#notes" role="tab" aria-controls="notes" aria-selected="false" class="nav-link border-0 text-uppercase font-weight-bold">Notes</a>
	      </li>
	    </ul>
	    <div id="myTabContent" class="tab-content">
	      <div id="included" role="tabpanel" aria-labelledby="included-tab" class="tab-pane fade px-4 py-5 show active">
	        <p class="text-muted">
                <?php $included = get_post_meta( get_the_ID(), '_included_text', true );
                echo esc_html( $included );?>
            </p>
	      </div>
	      <div id="not-included" role="tabpanel" aria-labelledby="not-included-tab" class="tab-pane fade px-4 py-5">
	        <p class="text-muted">
                <?php $not_included = get_post_meta( get_the_ID(), '_not_included_text', true );
                echo esc_html( $not_included );?>  
            </p>
	      </div>
	      <div id="notes" role="tabpanel" aria-labelledby="notes-tab" class="tab-pane fade px-4 py-5">
	        <p class="text-muted">
                <?php $notes = get_post_meta( get_the_ID(), '_notes_text', true );
                echo esc_html( $notes );?></p>
	      </div>
	    </div>
	  </div>
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




	
	<section class="featured-tours">
	<div class="container">
		<div class="offer-section-title text-center" style="border-top: 1px solid rgba(0,0,0,.1);">
			<h2>Other tours</h2>
		</div>
	</div>
	<div class="container">
		<div class="row justify-content-between">
			<?php $the_query = new WP_Query(array('post_type' => 'offers', 'posts_per_page' => -1, 'post__not_in' => array(get_the_ID()), 'orderby'=> 'ASC'));?>
			<div id="owl-featured-tours" class="owl-carousel owl-theme">
				<?php if ( $the_query->have_posts() ) : ?>
				<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
				<?php $featured_img_url=get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>
			<div class="col-md-12" style="padding-bottom: 20px;">
				<div class="card mb-2 shadow">
				<img class="card-img-top" src="<?php echo $featured_img_url ?>" alt="">
					<div class="card-body">
						<h4 class="card-title"><?php the_title(); ?></h4>
						<p class="card-text"><?php print get_the_excerpt(); ?></p>
						<p class="card-text">Starting from <?php echo get_post_meta($post->ID, 'price', true)?> pp</p>
						<a class="btn btn-dark" href="<?php print get_permalink($post->ID) ?>">More</a>
					</div>
				</div>
			</div>
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
			<?php else: ?>
			<p>
			<?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?>
			</p>
			<?php endif; ?>
			</div>
		</div>
	</div>
</section>

<section class="newsletter-area">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="call-to-area-text text-center">
					<h2>Get social</h2>
					<p>Subscribe to our newsletter to get the latest news and updates directly in your inbox</p>
				</div>
			</div>
		</div>
		<div class="row justify-content-center align-items-center">
			<div class="d-flex col-md-8">
				<input class="form-control mr-2">
				<button class="btn newsletter-subscribe-btn">Join</button>
			</div>
		</div>
		
		<div class="row">

		</div>
	</div>

</section>






	
	<!--<div class="container">
	
	<?php the_content(); ?>
</div>-->

<?php get_footer(); ?>