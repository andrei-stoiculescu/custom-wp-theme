<?php
// Add scripts and stylesheets
function customtheme_scripts() {
	wp_enqueue_style( 'style.css', get_template_directory_uri() . '/css/style.css' );
	wp_enqueue_style( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css', array(), '4.5.0' );
	wp_enqueue_script( 'jquery slim', 'https://code.jquery.com/jquery-3.5.1.slim.min.js', array(), '3.5.1', true);
	wp_enqueue_script( 'popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array(), '1.16.0', true);
	wp_enqueue_script( 'bootstrap js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js', array( 'jquery'), '4.5.0', true);
	wp_enqueue_style( 'owlcarousel css', get_template_directory_uri() . '/owlcarousel/assets/owl.carousel.min.css', array(), '2.3.4' );
	wp_enqueue_style( 'owlcarousel default theme css', get_template_directory_uri() . '/owlcarousel/assets/owl.theme.default.min.css', array(), '2.3.4' );
	wp_enqueue_script( 'owlcarousel js', get_template_directory_uri() . '/owlcarousel/owl.carousel.min.js', array(), '', true );
	wp_enqueue_script( 'custom owlcarousel header', get_template_directory_uri() . '/owlcarousel/header.js', array(), '', true );
	wp_enqueue_script( 'scripts js', get_template_directory_uri() . '/js/scripts.js', array(), '', true );

}

add_action( 'wp_enqueue_scripts', 'customtheme_scripts' );


// Add Google Fonts
function customtheme_google_fonts() {
	 wp_enqueue_style('Google Fonts', 'https://fonts.googleapis.com/css2?family=Archivo:wght@400;500;600;700&family=Open+Sans:wght@400;600;700', false);
}

add_action('wp_print_styles', 'customtheme_google_fonts');

// WordPress Titles
add_theme_support( 'title-tag' );

// Support Featured Images
add_theme_support( 'post-thumbnails' );


// Add custom post type for offers
function create_custom_post() {
	register_post_type( 'offers',
			array(
			'labels' => array(
	'name' => __( 'Offers' ),
	'singular_name' => __( 'Offer' ),
			),
			'public' => true,
			'has_archive' => true,
			'supports' => array(
	'title',
	'editor',
	'thumbnail',
//	'custom-fields'
			)
	));
}
add_action( 'init', 'create_custom_post' );


// Add custom post type for testimonials
function create_testimonials() {
	register_post_type( 'testimonials',
			array(
			'labels' => array(
	'name' => __( 'Testimonials' ),
	'singular_name' => __( 'testimonial' ),
			),
			'public' => true,
			'has_archive' => true,
			'supports' => array(
	'title',
	'editor',
	'thumbnail',
//	'custom-fields'
			)
	));
}
add_action( 'init', 'create_testimonials' );


















add_action( 'cmb2_admin_init', 'cmb2_sample_metaboxes' );
/**
 * Define the metabox and field configurations.
 */
function cmb2_sample_metaboxes() {

	/**
	 * Initiate the metabox
	 */
	$cmb = new_cmb2_box( array(
		'id'            => 'itinerary_metabox',
		'title'         => __( 'Itinerary', 'cmb2' ),
		'object_types'  => array( 'offers' ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
		'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // Keep the metabox closed by default
	) );

	// Regular text field
	$cmb->add_field( array(
		'name'       => __( 'Daily itinerary', 'cmb2' ),
		//'desc'       => __( 'field description (optional)', 'cmb2' ),
		'id'         => '_itinerary_text',
		'type'       => 'textarea',
		'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value
		// 'sanitization_cb' => 'my_custom_sanitization', // custom sanitization callback parameter
		// 'escape_cb'       => 'my_custom_escaping',  // custom escaping callback parameter
		// 'on_front'        => false, // Optionally designate a field to wp-admin only
		'repeatable'      => true
	) );



$cmb = new_cmb2_box( array(
		'id'            => 'tour_date_metabox',
		'title'         => __( 'Date', 'cmb2' ),
		'object_types'  => array( 'offers' ), // Post type
		'context'       => 'normal',
		'priority'      => 'default',
		'show_names'    => true, // Show field names on the left
		'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // Keep the metabox closed by default
	) )
;
$cmb->add_field( array(
    'name' => 'Tour start date',
    'id'   => '_tour_dates',
    'type' => 'text_date',
    // 'timezone_meta_key' => 'wiki_test_timezone',
    'date_format' => 'd-m-Y',
    'cmb_styles' => true, // false to disable the CMB stylesheet
) );







}
















//Add custom metabox
function add_custom_metabox(){
	add_meta_box( 
		'custom-metabox',
        'Custom fields',
        'custom_metabox_callback',
        'offers',
        'normal'
    );
}
 



add_action('add_meta_boxes', 'add_custom_metabox');
 
 //Show custom meta boxes in editor
function custom_metabox_callback(){
     
    global $post;
     
    ?>
 
    <div class="row">
        <div class="label">Price</div>
        <div class="fields">
            <input type="text" name="_price" value="<?php echo get_post_meta($post->ID, 'price', true)?>"/>
        </div>
    </div>
 
    <?php
}
 



//Save custom meta box content
function save_custom_metabox(){
 
    global $post;
 
    if(isset($_POST["_price"])):
         
        update_post_meta($post->ID, 'price', $_POST["_price"]);
     
    endif;
}
 
add_action('save_post', 'save_custom_metabox');

















// Custom global settings

//Custom settings menu
function custom_settings_add_menu() {
	add_menu_page( 'Custom settings', 'Custom settings', 'manage_options', 'custom-settings', 'custom_settings_page', null, 99 );
}
add_action( 'admin_menu', 'custom_settings_add_menu' );

// Custom settings page in admin
function custom_settings_page() { ?>
	<div class="wrap">
		<h1>Custom theme settings</h1>
		<form method="post" action="options.php">
				<?php
						settings_fields( 'section' );
						do_settings_sections( 'theme-options' );
						submit_button();
				?>
		</form>
	</div>
<?php }







