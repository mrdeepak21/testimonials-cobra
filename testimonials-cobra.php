<?php
/**
 * @version 1.0.0 @package testimonials-cobra
 * Plugin Name: Testimonials by Heigh10
 * Author: Deepak Kumar
 * Author URI: https://linkedin.com/in/deepak01
 * Description: Testimonials Showcase Using CPT UI plugin with cobra_testimonials post_type. Use shortcode [cobra_testimonials] to display anywhere
 */

wp_enqueue_style( 'style', plugins_url( '/front-end/style.css', __FILE__ ), false, '1.0', 'all' );

wp_enqueue_script('script', plugins_url( '/front-end/script.js', __FILE__ ), false,'1.0', true );

add_shortcode( 'cobra_testimonials', function()
{
    require_once('front-end/index.html');
});