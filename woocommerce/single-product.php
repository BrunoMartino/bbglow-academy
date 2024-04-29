<?php get_header(); ?>
<div class="container single__product-breadcrumb"><?php woocommerce_breadcrumb(['delimiter' => '>']); ?></div>
<div class='container notificacao'> 
  <?php wc_print_notices(); ?>
</div>
<?php get_footer(); ?>
<main>
<?php
if(have_posts()){while (have_posts()) { the_post(); 
   $single_product = bbglow_format_single_product(get_the_ID(), $image_size = 'medium');
    $img_url = get_stylesheet_directory_uri() . '/dist/img' ;
?>



<?php } } ?>
</main>