<?php
/**
 * @version 1.0.0 @package testimonials-cobra
 * Plugin Name: Testimonials by Heigh10
 * Author: Deepak Kumar
 * Author URI: https://linkedin.com/in/deepak01
 * Description: Testimonials Showcase Using CPT UI plugin with cobra_testimonials post_type. Use shortcode [cobra_testimonials] to display anywhere
 */

 add_action( 'wp_enqueue_scripts', function () {
  wp_enqueue_style( 'testimonials', plugins_url( '/front-end/style.css' , __FILE__ ), false, '1.0', 'all');
  wp_enqueue_style( 'font-awesome-6.4', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css',false,'6.4','all');
  if(is_front_page()) {
  wp_enqueue_script('testimonials',plugins_url( '/front-end/script.js', __FILE__ ), false,'1.0', true );}
} );

add_shortcode( 'cobra_testimonials', function()
{
  global $wpdb;
  $array = [
"post_type" => "testimonials",
"post_status" => "publish",
"numberposts" => 5,
  ] ;

  $testimonials = get_posts($array);
  $image = ""; $slides = "";
  foreach ($testimonials as $key => $value) {
    $isActive = $key ===0 ? 'active':'';
    $image .= '<div class="person-slide slide-'.$key.'">
    <img src="'.wp_get_attachment_url( get_post_thumbnail_id($value->ID), 'thumbnail' ).'" alt="" srcset="">
  </div>';
  
  $slides .= '<div class="slide">
  <p class="description elementor-heading-title">
    '.$value->post_content.'
  </p>
  <div class="name">
  '.$value->post_title.'
  </div>
  <div class="degignation">
    '.get_post_meta($value->ID, 'designation', true).'
  </div>
</div>'; 
  
}
    return '
    <div class="testimonials">
    <div class="row">
      <div class="col-40">
        <div class="person-slider">
          <div class="person-slides">
          '.$image.'
          </div>
        </div>
      </div>
      <div class="col-60">
        <div class="slider">
          <div class="slides">
            '.$slides.'                     
        </div>
        <div class="dots"></div>
      </div>
    </div>
    </div>
      ';
});


