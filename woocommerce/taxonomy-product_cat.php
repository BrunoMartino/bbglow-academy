<?php
//Template Name: shop-zion
get_header() ?>
<?php 
$products=[];
if (have_posts()) {while(have_posts()) {the_post();
$products[] = wc_get_product(get_the_ID());
} };
$data['products'] = format_products($products);
?>
<section id="shop__banner">
  <img class="shop__banner-bg" src="<?= the_field('background_shop_sess1', woocommerce_get_page_id('shop')) ?>" alt="promotion banner">
  <div class="banner__wrapper">
    <img src="<?= the_field('image_product_sess1',woocommerce_get_page_id('shop') ) ?>" alt="
    featured product">
    <div class="banner__wrapper-info">
      <h3><?php echo the_field('title_sess1',woocommerce_get_page_id('shop') ) ?>  <span> <?php the_field('subtitle_sess1',woocommerce_get_page_id('shop') ) ?></span></h3>
      <a href="<?= the_field('url_button_sess1',woocommerce_get_page_id('shop') ) ?>"><?= the_field('button_label',woocommerce_get_page_id('shop') ) ?></a>
    </div>
  </div>
</section>

<section id="search__wrapper">
<div class="search-bar">
  <form action="<?php bloginfo('url');?>/shop/" method="get">
    <input type="text" name="s" id="s" placeholder="Search" value="<?php the_search_query();?>">
    <input type="text" name="post_type" value="product" class="hidden">
    <button type="submit" id='search_btn' value="Search">Search</button>
  </form>
</div>
<div class="filter_wrapper">
  <button class="filter_btn lg:hidden">Filters</button>
  <ul class="filter_list hidden lg:flex">
    <li>
      <a id="all_products" href="/shop">All Products</a>
    </li>
    <li>
      <button id="most-sales-btn">
best sellers</button>
    </li>
    <li>
      <button id="newest-btn">releases</button>
    </li>
  </ul>
</div>
</section>
<section id="main-wrapper">
  <div class="products__categories">
    <h2 class='categories_btn' >Categories</h2>
    <?php 
    wp_nav_menu([
      'menu' => 'categories-filter',
     'container' => 'nav',
     'container_class' => 'categories_nav hidden lg:flex',
     ]);
    ?>
  </div>
  <main>
  <?php if($data['products']) { ?>
    <div id="product-list">
    <?php bbglow_product_list($data['products']); ?>
    </div>
    <?= get_the_posts_pagination() ?>
  <?php } else { ?>
    <p class='not-finded'> Ops! we couldn't find this time</p>
  <?php } ?>
</main>
</section>
<?php get_footer() ?>