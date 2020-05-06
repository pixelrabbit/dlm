<?php
remove_theme_support('post-formats'); 
add_theme_support( 'post-thumbnails' ); 
add_image_size( 'profile', 270, 300, array('center','center') );

function theme_assets() {
  //wp_enqueue_script( 'sidr', get_template_directory_uri() . '/jquery.sidr.js');
  wp_enqueue_script( 'theme', get_template_directory_uri() . '/theme.js');
}
add_action( 'wp_enqueue_scripts', 'theme_assets' );

add_action( 'widgets_init', 'sidebar_init' );
function sidebar_init()
{
  register_sidebar( array (
    'name' => 'Sidebar Widget Area',
    'id' => 'primary-widget-area',
    'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
    'after_widget' => "</li>",
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
    ) );
}

add_action( 'init', 'cpt' );
function cpt() {
  register_post_type( 'profiles',
    array(
      'labels' => array(
        'name' => 'Profiles',
        'singular_name' => 'Profile'
        ),
      'public' => true,
      'has_archive' => false,
      'menu_icon' => 'dashicons-id-alt',
      'supports' => array('title','editor','thumbnail','revisions'),
      'rewrite' => array('slug'=>'attorneys')
      )
    );
  register_post_type( 'services',
    array(
      'labels' => array(
        'name' => 'Services',
        'singular_name' => 'Service'
        ),
      'public' => true,
      'has_archive' => false,
      'menu_icon' => 'dashicons-tag',
      'supports' => array('title','editor','excerpt','revisions'),
      'rewrite' => array('slug'=>'services')
      )
    );
}

//redirect individual attorney posts
add_action('wp', 'redirect_cpt');
function redirect_cpt(){ 
  global $post;
  if( (is_singular('profiles')) ){ 
    wp_redirect( home_url('/attorneys/') ); exit; 
  }
  if( (is_singular('services')) ){ 
    wp_redirect( home_url('/services/') ); exit; 
  }
}

if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(array(
		'page_title' 	=> 'Theme Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
   ));
}