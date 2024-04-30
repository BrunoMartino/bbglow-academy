<?php get_header(); ?>
<div class="container single__product-breadcrumb"><?php woocommerce_breadcrumb(['delimiter' => '>']); ?></div>
<div class='container notificacao'> 
  <?php wc_print_notices(); ?>
</div>

<main id="product__main">
<?php
if(have_posts()){while (have_posts()) { the_post(); 
   $single_product = bbglow_format_single_product(get_the_ID(), $image_size = 'medium');
    $img_url = get_stylesheet_directory_uri() . '/dist/img' ;
?>
<?php if(count($single_product['gallery']) > 0) { ?>
<div id="gallery">
  <div id="main-slider" class="splide">
    <div class="splide__track">
      <ul class="splide__list">
          <li class="splide__slide gallery__main-img">
            <img src="<?= $single_product['img']; ?>" alt="<?= $single_product['name'] ?>" loading='lazy'>
          </li> 
        <?php foreach($single_product['gallery'] as $img) { ?>
          <li class="splide__slide gallery__main-img">
            <img src="<?= $img; ?>" alt="<?= $single_product['name'] ?>" loading='lazy'>
          </li>
        <?php } ?>      
      </ul>
    </div>
  </div> 
  <div id='thumbnail-slider' class="splide">
    <div class="splide__track thumb-wrapper">
      <ul class="splide__list"> 
          <li class="splide__slide gallery__thumb-img">
            <img src="<?= $single_product['img']; ?>" alt="<?= $single_product['name'] ?>" loading='lazy'>
          </li>
        <?php foreach($single_product['gallery'] as $img) { ?>
          <li class="splide__slide gallery__thumb-img">
            <img src="<?= $img; ?>" alt="<?= $single_product['name'] ?>" loading='lazy'>
          </li>
        <?php } ?>      
      </ul>
    </div>     
  </div> 
</div>
<?php } else { ?>
 <div class="single__main-img">
  <img src="<?= $single_product['img'] ?>" alt="">
 </div>
<?php } ?>
  <section class="product__info">
    <h1><?= $single_product['name'] ?></h1>
    <?php if($single_product['sale-price']) { ?>
    <p class='single__reg-price'> $ <?= $single_product['regular-price'] ?></p>
    <p class="single__sale-price"> $ <?= $single_product['sale-price']?></p>
    <?php } else { 
     $single_product['sale-price'] = $single_product['regular-price']  
    ?>
        <p class="single__sale-price"> $ <?= $single_product['sale-price']?></p>
    <?php } ?>
    <div class="btn-flexbox">
      <?php woocommerce_template_single_add_to_cart(); ?>
    </div>
  </section>
  </main>
  <section class="product__description">
    <div>
    <h2>Description</h2>
    <p><?= $single_product['description']; ?></p>
    </div>
  </section>
  <?php 
  $related_ids = wc_get_related_products( $single_product['id'],4 );
  $related_products = [];
  foreach($related_ids as $product_id) {
    $related_products[] = wc_get_product( $product_id );
  }
  $related = format_products($related_products);
  ?>
  <section class="products__related">
    <h2>You May also Like</h2>
    <?php bbglow_product_list($related); ?>
  </section>
<?php } } ?>
<?php get_footer(); ?>