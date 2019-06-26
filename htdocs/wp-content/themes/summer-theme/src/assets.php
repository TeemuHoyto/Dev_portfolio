<?php

/**
 * Enqueue styles and scripts.
 */
function st_theme_scripts()
{
    // Get file modification times to enable more dynamic versioning.
    $css_mod_time = file_exists('ST_ASSET_PATH' . '/main.css') ?
        filemtime('ST_ASSET_PATH' . '/main.css') : ST_THEME_VERSION;
    $js_mod_time  = file_exists('ST_ASSET_PATH' . '/main.js') ?
        filemtime('ST_ASSET_PATH' . '/main.js') : ST_THEME_VERSION;

     //   wp_enqueue_script('js',get_template_directory_uri() . '/js/image_hover_reveal.js','','',true);

    wp_enqueue_style( 'reset-styles', get_template_directory_uri() . '/css/reset.css', array(), null, 'all' );
    wp_enqueue_style( 'summertheme-scripts',  get_template_directory_uri() . 'assets/css/app.css');
    wp_enqueue_style( 'main-menu-styles', get_template_directory_uri() . '/css/main-menu-style.css', array(), null, 'all' );
    wp_enqueue_style( 'header-styles', get_template_directory_uri() . '/css/header.css', array(), null, 'all' );
    wp_enqueue_style( 'footer-styles', get_template_directory_uri() . '/css/footer.css', array(), null, 'all' );
    wp_enqueue_style( 'single-styles', get_template_directory_uri() . '/css/single.css', array(), null, 'all' );
    wp_enqueue_style( 'main-styles', get_template_directory_uri() . '/css/my-style.css', array(), null, 'all' );

}

add_action('wp_enqueue_scripts', 'st_theme_scripts');


function admin_style() {
    wp_enqueue_style( 'admin-styles', get_template_directory_uri() . '/css/ruler_of_Admin.css', array(), null, 'all' );
  }
  add_action( 'admin_enqueue_scripts', 'admin_style' );

/*
*Ads theme support for featured image and rhumbnails
*/
add_theme_support('post-thumbnails');


/**
 * Add image size
 */

add_action( 'after_setup_theme', 'wpdocs_theme_setup' );
function wpdocs_theme_setup() {
    add_image_size( 'HD', 1920, 600, true ); // (cropped)
}

/*
* Function to get post featured image  
*/

add_filter('post_thumbnail_html', 'my_post_image_html', 10, 3);
function my_post_image_html($html, $post_id, $post_image_id)
{
    $html = '<a id="an_a_container" href="' . get_permalink($post_id) . '" alt="' . esc_attr(get_the_title($post_id)) . '">' . $html . '</a>';
    return $html;
}
add_image_size('featured-large', 1000, 677, true); // width, height, crop
add_image_size('featured-small', 320, 147, true);
add_image_size('crop', 1000, 1000, true);
// Add other useful image sizes for use through Add Media modal
add_image_size('medium-width', 480);
add_image_size('medium-height', 9999, 480);
add_image_size('medium-something', 480, 480);

// Register the three useful image sizes for use in Add Media modal
add_filter('image_size_names_choose', 'wpshout_custom_sizes');
function wpshout_custom_sizes($sizes)
{
    return array_merge($sizes, array(
        'medium-width' => __('Medium Width'),
        'medium-height' => __('Medium Height'),
        'medium-something' => __('Medium Something'),
    ));
}
/*
*Function removes admin login bar top of page  
*/
function remove_admin_login_header()
{
    remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('get_header', 'remove_admin_login_header');

function custom_excerpt_length( $length ) {
    return 10;
    }
    add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
