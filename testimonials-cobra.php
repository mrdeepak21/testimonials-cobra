<?php
/**
 * @version 1.0.0 @package testimonials-cobra
 * Plugin Name: Testimonials by Heigh10
 * Author: Deepak Kumar
 * Author URI: https://linkedin.com/in/deepak01
 * Description: Testimonials Showcase Using CPT UI plugin with cobra_testimonials post_type. Use shortcode [cobra_testimonials] to display anywhere
 */

wp_enqueue_style( 'style', plugins_url( '/front-end/style.css', __FILE__ ), false, '1.0', 'all' );
add_action('wp_head',function(){
  echo '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />';
});

wp_enqueue_script('script', plugins_url( '/front-end/script.js', __FILE__ ), false,'1.0', true );

add_shortcode( 'cobra_testimonials', function()
{
    return '
    <div class="row">
      <div class="col-40">
        <img src="https://picsum.photos/800/600" width="1000" alt="" srcset="">
      </div>
      <div class="col-60">
        <div class="slider">
          <div class="slides">
            <div class="slide">
              <p class="description elementor-heading-title">
                We have perfected our formulas over time, based on your feedback. Check out hundreds of reviews on our website.We can\'t wait until you are a part of our Good4Me Family.
              </p>
              <div class="name">
                Stephen Herlick, Senior Director of ERP
              </div>
              <div class="degignation">
                Management Support
              </div>
            </div>
            <div class="slide">
              <p class="description elementor-heading-title">
                We have perfected our formulas over time, based on your feedback. Check out hundreds of reviews on our website.We can\'t wait until you are a part of our Good4Me Family.
              </p>
              <div class="name">
                Stephen Herlick, Senior Director of ERP
              </div>
              <div class="degignation">
                Management Support
              </div>
            </div>
            <div class="slide">
              <p class="description elementor-heading-title">
                We have perfected our formulas over time, based on your feedback. Check out hundreds of reviews on our website.We can\'t wait until you are a part of our Good4Me Family.
              </p>
              <div class="name">
                Stephen Herlick, Senior Director of ERP
              </div>
              <div class="degignation">
                Management Support
              </div>
            </div>
            <div class="slide">
              <p class="description elementor-heading-title">
                We have perfected our formulas over time, based on your feedback. Check out hundreds of reviews on our website.We can\'t wait until you are a part of our Good4Me Family.
              </p>
              <div class="name">
                Stephen Herlick, Senior Director of ERP
              </div>
              <div class="degignation">
                Management Support
              </div>
            </div>
          </div>
          <div class="dots"></div>
        </div>
      </div>
    </div>
      ';
});


