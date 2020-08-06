<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--    <meta name="description" content="">
    <meta name="author" content="">
-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
  </head>

  <body>

    <div class="blog-masthead">
  <div class="container">
    <nav class="blog-nav">
      <a class="blog-nav-item active" href="#">Home</a>
      <?php wp_list_pages( '&title_li=' ); ?>
    </nav>
  </div>
</div>

<!-- HEADER PT HOMEPAGE
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
-->





























    <div class="container">

      <div class="blog-header">
        <h1 class="blog-title">
          <a href="<?php echo get_bloginfo( 'wpurl' );?>">
            <?php echo get_bloginfo( 'name' ); ?>
          </a>
        </h1>
        <p class="lead blog-description"><?php echo get_bloginfo( 'description' ); ?></p>
      </div>