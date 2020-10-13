
<?php get_header(); ?>

<section id="header">
<div class="header-container-text header-overlay h-100">
  <div class="d-flex align-items-center flex-column justify-content-center h-100 p-4">
    <h1 class="display-4">Discover Romania</h1>
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</p>
    <button type="button" class="btn custom-btn">Book now</button>
  </div>
</div>

<div id="owl-header" class="owl-carousel owl-theme">
  <div class="owl-slide cover" style="background-image: url(https://emerging-europe.com/wp-content/uploads/2019/03/bigstock-gorgeous-spring-countryside-la-280866130-990x556.jpg);"></div>
  <div class="owl-slide cover" style="background-image: url(https://booksandbao.com/wp-content/uploads/2020/01/majkl-velner-nKY59_d9FlA-unsplash-1600x1067.jpg);"></div>
  <div class="owl-slide cover" style="background-image: url(https://cdn.kimkim.com/files/a/content_articles/featured_photos/32efe52768060fa172de0f052d3527f53cdfb58a/big-0c5409996c6e87912a9401bb9695d679.jpg);"></div>
</div>
</section>

<section class="featured-tours">
	<div class="container">
		<div class="section-title text-center">
			<h2>Featured tours</h2>
		</div>
	</div>
	<div class="container">
		<div class="row justify-content-between">
			<?php $the_query = new WP_Query(array('post_type' => 'offers', 'posts_per_page' => -1, 'orderby'=> 'ASC'));?>
			<div id="owl-featured-tours" class="owl-carousel owl-theme">
				<?php if ( $the_query->have_posts() ) : ?>
				<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
				<?php $featured_img_url=get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>
			<div class="col-md-12" style="padding-bottom: 20px;">
				<div class="card mb-2 border shadow">
				<img class="card-img-top" src="<?php echo $featured_img_url ?>">
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







    <section class="call-to-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="call-to-area-text text-center">
                        <h2>We can help you make this tour memorable</h2>
                        <p>We offer a wide range of procedures to help you get the perfect smile</p>
                        <button type="button" class="btn custom-btn">Book now</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
	





<section class="service-area">
	<div class="container">
		<div class="section-title text-center">
			<h2>Why choose us?</h2>
		</div>
	</div>
<div class="container">
  <div class="row">
    <div class="col-sm">
    	<img src="https://via.placeholder.com/150">
    		<div class="service-text">
    		<h4 class="grow">Value for money</h4>
    		<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
    	</div>
    </div>
    <div class="col-sm">
      <img src="https://via.placeholder.com/150">
    		<div class="service-text">
    		<h4 class="grow">Best tours</h4>
    		<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
    	</div>
    </div>
    <div class="col-sm">
      <img src="https://via.placeholder.com/150">
    		<div class="service-text">
    		<h4 class="grow">Unique experiences</h4>
    		<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
    	</div>
    </div>
  </div>
</div>
</section>






<section class="testimonials">
	<div class="container">
		<div class="section-title text-center">
			<h2>Testimonials</h2>
		</div>
	</div>
	<div class="container">
		<div class="row justify-content-between"> 
			<?php $the_query = new WP_Query(array('post_type' => 'testimonials', 'posts_per_page' => -1, 'orderby'=> 'ASC'));?>
			<div id="owl-testimonials" class="owl-carousel owl-theme">
				<?php if ( $the_query->have_posts() ) : ?>
				<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			<div class="col-md-12" style="padding-bottom: 20px;">
				<div class="card mb-2 shadow">
					<div class="card-body">
						<h4 class="card-title"><?php the_title(); ?></h4>
						<p class="card-text"><?php print get_the_excerpt(); ?></p>
						<a class="btn btn-default" href="<?php print get_permalink($post->ID) ?>">Read more</a>
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











    <section class="call-to-area-2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="call-to-area-text text-center">
                        <h2>Are you looking for a hassle free experience?</h2>
                        <p>We can plan the perfect getaway and all you have to do is enjoy it</p>
                        <button type="button" class="btn custom-btn">Request an offer</button>
                    </div>
                </div>
            </div>
        </div>
    </section>













<section class="contact-area">

	<div class="container">
		<div class="section-title text-center">
			<h2>Get in touch</h2>
		</div>
	</div>



<div class="container">
	<div class="row">
		<div class="col-sm-4">
			<div class="contact-text text-center">
				<div class="contact-icon">
					<svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-geo-alt" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" d="M12.166 8.94C12.696 7.867 13 6.862 13 6A5 5 0 0 0 3 6c0 .862.305 1.867.834 2.94.524 1.062 1.234 2.12 1.96 3.07A31.481 31.481 0 0 0 8 14.58l.208-.22a31.493 31.493 0 0 0 1.998-2.35c.726-.95 1.436-2.008 1.96-3.07zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
					<path fill-rule="evenodd" d="M8 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
					</svg>
				</div>
				<h4>Our office</h4>
				<p>10 Calea Plevnei St. Bucharest, Romania</p>
			</div>
		</div>
	                
		<div class="col-sm-4">
			<div class="contact-text text-center">
				<div class="contact-icon">
					<svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-telephone" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
				  	<path fill-rule="evenodd" d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
					</svg>
				</div>
				<h4>Telephone</h4>
				<p>+4 021 212 13 60</p>
				</div>
		</div>

		<div class="col-sm-4">
			<div class="contact-text text-center">
				<div class="contact-icon">
					<svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-envelope" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
				  	<path fill-rule="evenodd" d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383l-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z"/>
					</svg>
				</div>
				<h4>E-mail</h4>
				<p>contact@trip-tailor.com</p>
			</div>
		</div>
	
	</div>
</div>




<div class="container">
	<div class="row contact-form-design-area">
		<div class="col-md-12">
			<div class="contact-form">
				<form id="contact-form" method="post" enctype="multipart/form-data">
					<div class="row">
						<div class="form-group col-md-4">
						<input type="text" name="name" class="form-control" id="first-name" placeholder="Name" required="required">
						</div>
						<div class="form-group col-md-4">
						<input type="email" name="email" class="form-control" id="email" placeholder="Email" required="required">
						</div>
						<div class="form-group col-md-4">
						<input type="text" name="subject" class="form-control" id="subject" placeholder="subject">
						</div>

						<div class="form-group col-md-12">
						<textarea rows="6" name="message" class="form-control" id="description" placeholder="Your Message" required="required"></textarea>
						</div>
					<div class="col-md-12 text-center">
					
					<input type="submit" value="send message" name="submit" id="submitButton" class="" title="Submit Your Message!">
					
					</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

</section>

















<?php get_footer(); ?>