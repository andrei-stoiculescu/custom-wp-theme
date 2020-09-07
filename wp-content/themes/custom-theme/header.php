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

 <header id="home" class="welcome-area">
  <div class="header-top-area">
    <div class="container"> 
      <div class="row">
        <div class="col-sm-3">
          <div class="logo">
            <span>
              <a href="<?php echo home_url(); ?>">Triptailor</a>
            </span>
          </div>
           
        </div> <!-- col-sm-3 logo -->
        
        <div class="col-sm-8 d-none d-sm-block">
          <div class="navbar-links">
            <ul>
              <li><a href="#">Tours</a></li>
              <li><a href="#">About</a></li>
              <li><a href="#">Contact</a></li>
            </ul>
          </div>
        </div><!-- col-sm-8 links -->
      </div> <!-- row -->
    </div><!-- container -->



<div class="mobile-menu-button d-block d-sm-none">
<span style="font-size:30px;cursor:pointer;" onclick="openNav()">&#9776;</span>
                        <!-- MOBILE NAVIGATION MENU START-->
    <div id="mobile-menu-button" class="mobile-menu-overlay">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <div class="mobile-menu-overlay-content">
            <a href="index.html">Tours</a>
            <a href="#">About</a>
            <a href="#">Contact</a>
        </div>
    </div>
    

<!-- MOBILE NAVIGATION MENU END-->


</div>

</div> <!-- end top area -->


<script type="text/javascript">
    

</script>


<script type="text/javascript">
          $(document).on('click', '.navbar-collapse.in', function (e) {
            if ($(e.target).is('a') && $(e.target).attr('class') != 'dropdown-toggle') {
                $(this).collapse('hide');
            }
        });
        $('body').scrollspy({
            target: '.navbar-collapse',
            offset: 195
        });

</script>








<!--
    <div class="container">

      <div class="blog-header">
        <h1 class="blog-title">
          <a href="<?php echo get_bloginfo( 'wpurl' );?>">
            <?php echo get_bloginfo( 'name' ); ?>
          </a>
        </h1>
        <p class="lead blog-description"><?php echo get_bloginfo( 'description' ); ?></p>
      </div>

      -->