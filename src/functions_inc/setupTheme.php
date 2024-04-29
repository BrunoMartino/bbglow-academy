<?php
// Add Theme Style on website
function bbglow_add_woocommerce_support() {
  add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'bbglow_add_woocommerce_support');
function bbglow_css() {
  wp_register_style('bbglow-style', get_stylesheet_directory_uri() . '/style.css', [], '1.0.0', false);
  wp_register_style('bbglow-tailwind', get_stylesheet_directory_uri() . '/dist/css/tailwind.css', [], '1.0.0', false);
  wp_enqueue_style('bbglow-style');
  wp_enqueue_style('bbglow-tailwind');
}
add_action('wp_enqueue_scripts', 'bbglow_css');
//controls product display on category pages
function bbglow_loop_per_page() {
  return 9;
}
add_filter('loop_shop_per_page', 'bbglow_loop_per_page');

?>
