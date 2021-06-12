<?php 
 
require get_template_directory(). '/ajax.php';

// Site title
 add_theme_support('title-tag');
 add_theme_support('post-thumbnails');

 function shohagblog_add_google_fonts(){
    wp_enqueue_style('shohag_google_fonts','https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,600;1,700;1,800;1,900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap',false);
 }
add_action('wp_enqueue_scripts','shohagblog_add_google_fonts');
// Enqueue css and js
function shohagblog_enqueue_script(){
    // Enqueue Css
    wp_enqueue_style('line-awesome',get_template_directory_uri().'/assets/line-awesome/css/line-awesome.min.css',array(),'1.0.0','all');
    wp_enqueue_style('bootstrap',get_template_directory_uri().'/assets/css/bootstrap.min.css',array(),'1.0.0','all');
    wp_enqueue_style('carousel',get_template_directory_uri().'/assets/css/owl.carousel.min.css',array(),'1.0.0','all');
    wp_enqueue_style('owl.theme.default',get_template_directory_uri().'/assets/css/owl.theme.default.min.css',array(),'1.0.0','all');
    wp_enqueue_style('style',get_template_directory_uri().'/assets/css/style.css',array(),'1.0.0','all');
    wp_enqueue_style('responsive',get_template_directory_uri().'/assets/css/responsive.css',array(),'1.0.0','all');
    wp_enqueue_style('stylesheet',get_stylesheet_uri());

    // Enqueue Js
    wp_deregister_script( 'jquery' );
    wp_enqueue_script('jquery', get_template_directory_uri().'/assets/js/jquery.min.js', array(), '1.0', true );
    wp_enqueue_script('bootstrap',get_template_directory_uri().'/assets/js/bootstrap.min.js',array(),'1.0.0',true);
    wp_enqueue_script('carousel',get_template_directory_uri().'/assets/js/owl.carousel.min.js',array(),'1.0.0',true);
    wp_enqueue_script('custom',get_template_directory_uri().'/assets/js/custom.js',array(),'1.0.0',true);
}
add_action('wp_enqueue_scripts','shohagblog_enqueue_script');

// Register Navabar
function shohagblog_register_navbar(){
    if(function_exists('register_nav_menus')){
        register_nav_menus(array(
            'primary_menu'  => 'Primary Menu',
            'footer_menu'   => 'Footer Menu'
        )); 
    }
}
add_action('init','shohagblog_register_navbar');

// Content excerpt
function the_excerpts($num){
    $limit      = $num + 1;
    $excerpt    = explode(' ',get_the_content(), $limit);
    array_pop($excerpt);
    $excerpt    = implode(' ', $excerpt)."....";
    return  $excerpt;
}


// Post Views Count
function gt_get_post_view() {
    $count = get_post_meta( get_the_ID(), 'post_views_count', true );
    return "$count views";
    }
    function gt_set_post_view() {
        $key = 'post_views_count';
        $post_id = get_the_ID();
        $count = (int) get_post_meta( $post_id, $key, true );
        $count++;
        update_post_meta( $post_id, $key, $count );
    }
    function gt_posts_column_views( $columns ) {
        $columns['post_views'] = 'Views';
        return $columns;
    }
    function gt_posts_custom_column_views( $column ) {
        if ( $column === 'post_views') {
            echo gt_get_post_view();
        }
}
add_filter( 'manage_posts_columns', 'gt_posts_column_views' );
add_action( 'manage_posts_custom_column', 'gt_posts_custom_column_views' );

// Register Widget
function shohagblog_widgets_init() {
 
    // First footer widget area, located in the footer. Empty by default.
    register_sidebar( array(
        'name' => __( 'First Footer Widget Area', 'shohagblog' ),
        'id' => 'first-footer-widget-area',
        'description' => __( 'The first footer widget area', 'shohagblog' ),
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="footer-title">',
        'after_title' => '</h2>',
    ) );
 
    // Second Footer Widget Area, located in the footer. Empty by default.
    register_sidebar( array(
        'name' => __( 'Second Footer Widget Area', 'shohagblog' ),
        'id' => 'second-footer-widget-area',
        'description' => __( 'The second footer widget area', 'shohagblog' ),
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="footer-title">',
        'after_title' => '</h2>',
    ) );
 
    // Third Footer Widget Area, located in the footer. Empty by default.
    register_sidebar( array(
        'name' => __( 'Third Footer Widget Area', 'shohagblog' ),
        'id' => 'third-footer-widget-area',
        'description' => __( 'The third footer widget area', 'shohagblog' ),
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="footer-title">',
        'after_title' => '</h2>',
    ) );
         
}
 
add_action( 'widgets_init', 'shohagblog_widgets_init' );


function ruhul_academy_disable_comment_amy_filed($fields) { 
    unset($fields['url']);
    return $fields;
}
add_filter('comment_form_default_fields','ruhul_academy_disable_comment_amy_filed');


/*  Customizer Api */

function shohagblog_customizer_api($shohagblog_customizer){

    /* =================================================== */
    /* ---------------- Panel:: Footer ------------------- */
    /* =================================================== */
    $shohagblog_customizer->add_panel('panel_1',array(
       'priority'   => 9,
       'capability' => 'edit_theme_options',
       'theme_supports' => '',
       'title'  => __('Footer options','shohagblog'),
       'description'    => '' 
    ));

    /* ===================== Footer options ================== */
    $shohagblog_customizer->add_section('section_1',array(
        'title' => __('Copyright','shohagblog'),
        'description'   => '',
        'panel' => 'panel_1'
    ));
    $shohagblog_customizer->add_section('section_2',array(
        'title' => __('Social Links','shohagblog'),
        'description'   => '',
        'panel' => 'panel_1'
    ));

    /*  ---------------- Settings and Control -------------------- */
    $shohagblog_customizer->add_setting('copyright_text',array(
        'default'   => 'All right reserved by-Shohag Miah',
        'transport' => 'refresh'
    ));

    $shohagblog_customizer->add_control('copyright_text',array(
        'section'   => 'section_1',
        'label'     => 'Add your copyright Text'
    ));

    /*  ----------------- Social LInks Url ----------------------- */
    // Facebook link
    $shohagblog_customizer->add_setting('facebook_link',array(
        'default'   => 'www.facebook.com/',
        'transport' => 'refresh'
    ));

    $shohagblog_customizer->add_control('facebook_link',array(
        'section'   => 'section_2',
        'label'     => 'Add your Facebook link url'
    ));

    // Twitter Link
    $shohagblog_customizer->add_setting('twitter_link',array(
        'default'   => 'www.twitter.com/',
        'transport' => 'refresh'
    ));

    $shohagblog_customizer->add_control('twitter_link',array(
        'section'   => 'section_2',
        'label'     => 'Add your Twitter link url'
    ));

    // Facebook link
    $shohagblog_customizer->add_setting('instagram_link',array(
        'default'   => 'www.instagram.com/',
        'transport' => 'refresh'
    ));

    $shohagblog_customizer->add_control('instagram_link',array(
        'section'   => 'section_2',
        'label'     => 'Add your Instagram link url'
    ));

    // Twitter Link
    $shohagblog_customizer->add_setting('youtube_link',array(
        'default'   => 'www.youtube.com/',
        'transport' => 'refresh'
    ));

    $shohagblog_customizer->add_control('youtube_link',array(
        'section'   => 'section_2',
        'label'     => 'Add your Youtube link url'
    ));


    /* ====================================================== */
    /* -------------------- Panel :: Header ------------------- */
    /* ====================================================== */

    $shohagblog_customizer->add_panel('panel_2',array(
        'priority'   => 5,
        'capability' => 'edit_theme_options',
        'theme_supports' => '',
        'title'  => __('Header options','shohagblog'),
        'description'    => '' 
     ));

    /*  =================== Section ====================== */
    $shohagblog_customizer->add_section('header_section',array(
        'title' => __('Logo','shohagblog'),
        'description'   => '',
        'panel' => 'panel_2'
    ));

    /*  ---------------- Settings and Control -------------------- */
    $shohagblog_customizer->add_setting('logo_text',array(
        'default'   => 'Shohag',
        'transport' => 'refresh'
    ));

    $shohagblog_customizer->add_control('logo_text',array(
        'section'   => 'header_section',
        'label'     => 'Add your Logo Text'
    ));


}
add_action('customize_register','shohagblog_customizer_api');


function get_breadcrumb() {
	echo '<a href="'.home_url().'" rel="nofollow">Home</a>';
	if (is_category() || is_single()) {
		echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
		the_category(' &bull; ');
			if (is_single()) {
				echo " &nbsp;&nbsp;&#187;&nbsp;&nbsp; ";
				the_title();
			}
	} elseif (is_page()) {
		echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
		echo the_title();
	} elseif (is_search()) {
		echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
		echo the_search_query();
	}
}