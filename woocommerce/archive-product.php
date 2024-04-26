<?php
//Template Name: shop-zion
get_header() ?>
<?php 
$products=[];
if (have_posts()) {while(have_posts()) {the_post();
$products[] = wc_get_product(get_the_ID());
} };
$data['products'] = format_products($products);
$bg_img = get_field('background_shop_sess1', woocommerce_get_page_id('shop'));
$bg_img_url = $bg_img['url']
?>
<section id="shop__banner"
style="
background: url('<?= $bg_img_url ?>');
background-position: center left -4rem;
background-repeat: no-repeat;
background-size: cover;
"
>
  <div class="banner__wrapper">
    <img src="<?= the_field('image_product_sess1',woocommerce_get_page_id('shop') ) ?>" alt="
    featured product">
    <div>
      <h3><?php echo the_field('title_sess1',woocommerce_get_page_id('shop') ) ?>  <span> <?php the_field('subtitle_sess1',woocommerce_get_page_id('shop') ) ?></span></h3>
    </div>
    <a href="<?= the_field('url_button_sess1',woocommerce_get_page_id('shop') ) ?>"><?= the_field('button_label',woocommerce_get_page_id('shop') ) ?></a>
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
<a href="/shop">All Products</a>
<button id="most-sales-btn">Most Sales</button>
<button id="newest-btn">Newest</button>
</section>
<section id="main-wrapper">
  <div class="products__categories">
    <nav class="categories__filter">
        <h2>Categories</h2>
        <?php wp_nav_menu([
        'menu' => 'filter-categories',
        'menu-class' => 'menu-filter-categories-container',
        'container' => 'nav'
    ]); ?>
    </nav>
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