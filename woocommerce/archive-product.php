<?php
//Template Name: shop-zion
get_header() ?>
<?php 
$products=[];
if (have_posts()) {while(have_posts()) {the_post();
$products[] = wc_get_product(get_the_ID());
} };
$data['products'] = format_products($products);
$banners = get_field('shop_slide',woocommerce_get_page_id('shop'));
?>
<section id="shop__banner">
  <div id="banner__slide" class="splide">
     <div class="splide__track">
        <ul class="splide__list">
          <?php foreach($banners as $slide) { ?>
            <li class="splide__slide banner__wrapper">
              
              <!-- <div class="image__container"> -->
                 <img src="<?= $slide['slide_image'] ?>" alt="<?= $slide['product_name'] ?>"> 
             <!-- </div> -->
                <div class="banner__product-wrapper">
                  <h1><?= $slide['product_name'] ?></h1>
                  <p><?= $slide['price_text'] ?></p>
                  <a class="shop_btn" href="<?= $slide['button_link'] ?>"><?= $slide['button_label'] ?></a>
                </div>
            </li>
          <?php }?> 
        </ul>
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
  <button class="filter_btn lg:hidden">
    <p>Filters</p>
  </button>
  <ul class="filter_list hidden lg:flex">
    <li>
      <a id="all_products" href="/shop">All Products</a>
    </li>
    <li>
      <button id="most-sales-btn">best sellers</button>
    </li>
    <li>
      <button id="newest-btn">releases</button>
    </li>
    <li>
      <button id="az-btn">A - Z</button>
    </li>
    <li>
      <div class='filter__price-wrapper'>
        <p id="price-btn">Price</p>
          <form class='filter__price hidden'>
          <div>
            <label for="max_price">up to $</label>
            <input type="number" name='max_price' placeholder="50.00" id="max_price" value="<?= $_GET['max_price'] ?? ""; ?>">
          </div>    
            <button type="submit">Search Price</button>
          </form>
      </div>
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