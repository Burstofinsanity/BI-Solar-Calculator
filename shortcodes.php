<?php


add_shortcode('bi_solar_calculator', 'bi_solar_calc');
function bi_solar_calc( $atts = [], $content = null) {
    $dir = $dir??plugin_dir_path( __FILE__ );
    wp_enqueue_style( 'bi_calc_style', plugin_dir_url( __FILE__ ).'/assets/css/style.css',false,'1.0','all');
    wp_enqueue_script( 'script', plugin_dir_url( __FILE__ ).'/assets/js/script.js', 'jquery', 1.0, true);
    include $dir.'/includes/calc.php';
    return $content;
}