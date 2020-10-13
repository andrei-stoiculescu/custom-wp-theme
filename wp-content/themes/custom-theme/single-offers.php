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
</div>
</section>
<?php get_header(); ?>




<div class="container py-2">
   <div class="offer-section-title text-center">
			<h2>Itinerary</h2>
		</div>

    <!-- timeline item 1 -->
    <div class="row">
        <!-- timeline item 1 left dot -->
        <div class="col-auto text-center flex-column d-none d-sm-flex">
            <div class="row h-50">
                <div class="col">&nbsp;</div>
                <div class="col">&nbsp;</div>
            </div>
            <h5 class="m-2">
                <span class="badge badge-pill bg-light border">&nbsp;</span>
            </h5>
            <div class="row h-50">
                <div class="col border-right">&nbsp;</div>
                <div class="col">&nbsp;</div>
            </div>
        </div>
        <!-- timeline item 1 event content -->
        <div class="col py-2">
            <div class="card border shadow">
                <div class="card-body">
                    <div class="float-right text-muted">Mon, Jan 9th 2020 7:00 AM</div>
                    <h4 class="card-title">Day 1 Orientation</h4>
                    <p class="card-text">Welcome to the campus, introduction and get started with the tour.</p>
                </div>
            </div>
        </div>
    </div>
    <!--/row-->
    <!-- timeline item 2 -->
    <div class="row">
        <div class="col-auto text-center flex-column d-none d-sm-flex">
            <div class="row h-50">
                <div class="col border-right">&nbsp;</div>
                <div class="col">&nbsp;</div>
            </div>
            <h5 class="m-2">
                <span class="badge badge-pill bg-light border">&nbsp;</span>
            </h5>
            <div class="row h-50">
                <div class="col border-right">&nbsp;</div>
                <div class="col">&nbsp;</div>
            </div>
        </div>
        <div class="col py-2">
            <div class="card border shadow">
                <div class="card-body">
                    <div class="float-right text-muted">Tue, Jan 10th 2019 8:30 AM</div>
                    <h4 class="card-title ">Day 2 Sessions</h4>
                    <p class="card-text">Sign-up for the lessons and speakers that coincide with your course syllabus. Meet and greet with instructors.</p>
                    <button class="btn btn-sm btn-outline-secondary" type="button" data-target="#t2_details" data-toggle="collapse">Show Details ▼</button>
                    <div class="collapse border" id="t2_details">
                        <div class="p-2 text-monospace">
                            <div>08:30 - 09:00 Breakfast in CR 2A</div>
                            <div>09:00 - 10:30 Live sessions in CR 3</div>
                            <div>10:30 - 10:45 Break</div>
                            <div>10:45 - 12:00 Live sessions in CR 3</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/row-->
    <!-- timeline item 3 -->
    <div class="row">
        <div class="col-auto text-center flex-column d-none d-sm-flex">
            <div class="row h-50">
                <div class="col border-right">&nbsp;</div>
                <div class="col">&nbsp;</div>
            </div>
            <h5 class="m-2">
                <span class="badge badge-pill bg-light border">&nbsp;</span>
            </h5>
            <div class="row h-50">
                <div class="col border-right">&nbsp;</div>
                <div class="col">&nbsp;</div>
            </div>
        </div>
        <div class="col py-2">
            <div class="card border shadow">
                <div class="card-body">
                    <div class="float-right text-muted">Wed, Jan 11th 2019 8:30 AM</div>
                    <h4 class="card-title">Day 3 Sessions</h4>
                    <p>Shoreditch vegan artisan Helvetica. Tattooed Codeply Echo Park Godard kogi, next level irony ennui twee squid fap selvage. Meggings flannel Brooklyn literally small batch, mumblecore PBR try-hard kale chips. Brooklyn vinyl lumbersexual
                        bicycle rights, viral fap cronut leggings squid chillwave pickled gentrify mustache. 3 wolf moon hashtag church-key Odd Future. Austin messenger bag normcore, Helvetica Williamsburg sartorial tote bag distillery Portland before
                        they sold out gastropub taxidermy Vice.</p>
                </div>
            </div>
        </div>
    </div>
    <!--/row-->
    <!-- timeline item 4 -->
    <div class="row">
        <div class="col-auto text-center flex-column d-none d-sm-flex">
            <div class="row h-50">
                <div class="col border-right">&nbsp;</div>
                <div class="col">&nbsp;</div>
            </div>
            <h5 class="m-2">
                <span class="badge badge-pill bg-light border">&nbsp;</span>
            </h5>
            <div class="row h-50">
                <div class="col">&nbsp;</div>
                <div class="col">&nbsp;</div>
            </div>
        </div>
        <div class="col py-2">
            <div class="card border shadow">
                <div class="card-body">
                    <div class="float-right text-muted">Thu, Jan 12th 2019 11:30 AM</div>
                    <h4 class="card-title">Day 4 Wrap-up</h4>
                    <p>Join us for lunch in Bootsy's cafe across from the Campus Center.</p>
                </div>
            </div>
        </div>
    </div>
    <!--/row-->
</div>
<!--container-->






<section class="offer-inclusions">
<div class="container">
	<div class="offer-section-title text-center">
		<h2>Inclusions</h2>
	</div>
	<div class="p-0 bg-white rounded shadow mb-5">
	    <ul id="myTab" role="tablist" class="nav nav-tabs nav-pills flex-column flex-sm-row text-center border-0 ">
	      <li class="nav-item flex-sm-fill">
	        <a id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true" class="nav-link border-0 text-uppercase font-weight-bold active">Included</a>
	      </li>
	      <li class="nav-item flex-sm-fill">
	        <a id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false" class="nav-link border-0 text-uppercase font-weight-bold">Not included</a>
	      </li>
	      <li class="nav-item flex-sm-fill">
	        <a id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false" class="nav-link border-0 text-uppercase font-weight-bold">Notes</a>
	      </li>
	    </ul>
	    <div id="myTabContent" class="tab-content">
	      <div id="home" role="tabpanel" aria-labelledby="home-tab" class="tab-pane fade px-4 py-5 show active">
	        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
	          irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	      </div>
	      <div id="profile" role="tabpanel" aria-labelledby="profile-tab" class="tab-pane fade px-4 py-5">
	        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
	          irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	      </div>
	      <div id="contact" role="tabpanel" aria-labelledby="contact-tab" class="tab-pane fade px-4 py-5">
	        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
	          irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	      </div>
	    </div>
	  </div>
	</div>
</section>






	
	<section class="featured-tours">
	<div class="container">
		<div class="offer-section-title text-center" style="    border-top: 1px solid rgba(0,0,0,.1);">
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