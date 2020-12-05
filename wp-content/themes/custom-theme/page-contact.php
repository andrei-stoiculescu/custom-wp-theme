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



<section class="page-content-contact">
	







<div class="container">  
  <div class="row">
    <div class="col-sm-6 contact-first-column align-self-center">
        <h4>Our office</h4>
        <p>10 Calea Plevnei St. Bucharest, Romania<br>
        Monday - Friday<br>  
        09:00-18:00</p>

        <h4>Lets Talk</h4>
        <p>+4 021 212 13 60</p>
        
        <h4>E-mail</h4>
        <p>contact@trip-tailor.com</p>
        
        <h4>Get social</h4>
        <span class="contact-social"><a href="https://www.instagram.com/triptailor.dmc"><i class="fa fa-instagram contact-social"></i>Instagram</a></span>
        <span class="contact-social"><a href="https://www.facebook.com/AgentiaTriptailor/"><i class="fa fa-facebook"></i>Facebook</a></span>
        <span class="contact-social"><a href="http://www.twitter.com/triptailorro"><i class="fa fa-twitter"></i>Twitter</a></span>

    </div>
    <div class="col-sm-6 contact-second-column">
    <div class="row contact-form-design-area">
        <div class="col-md-12">                   
        <h4 class="contact-form-header">Send us a message</h4>   
            <div class="contact-form">
                <form id="contact-form" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="form-group col-md-6">
                        <input type="text" name="name" class="form-control" id="first-name" placeholder="Name" required="required">
                        </div>
                        <div class="form-group col-md-6">
                        <input type="email" name="email" class="form-control" id="email" placeholder="Email" required="required">
                        </div>
                        <div class="form-group col-md-12">
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
  </div>
</div>

</section>







<?php get_footer(); ?>