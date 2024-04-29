<?php 
//Template Name: Home-zion
get_header(); ?>
<?php 
$image_url = get_stylesheet_directory_uri() . '/dist/img';
$product_new_inputs = wc_get_products([
  'limit' => 4,
  'orderby' => 'date',
  'order' => 'DESC',
  'stock_status' => 'instock'
]);
$product_most_sales = wc_get_products([
  'limit' => 4,
  'orderby' => 'meta_value_num',
  'order' => 'DESC',
  'stock_status' => 'instock'
]);
$products_home = wc_get_products( [
  'limit' => 4, 
  'tag' => ['home'],
  'stock_status' => 'instock'
]);


$data = [];
$data['newest'] = format_products($product_new_inputs);
$data['most_sales'] = format_products($product_most_sales);
$data['home'] = format_products($products_home);
$data['posts'] = format_posts(get_field("blogpost"));
$data['sess2_showcase'] = get_field('showcase_products');
?>
<section id="sess1">
<div class="sess1_video-wrapper" >
  <video class="sess1_video" src="<?= the_field('sess1_bg_video') ?>"  type="video/mp4" autoplay loop muted playsinline >
  </video>
  <div class="sess1_cta" data-anima="scroll">
  <h1 class="font-1-xl"><?= the_field('sess1_title') ?></h1>
  <p class="font-1-l"><?= the_field('sess1_subtitle') ?></p>
  <a class="shop_btn" href="<?= the_field('sess1_btn_link') ?>"><?= the_field('sess1_btn_label') ?></a>
</div>
</div>
</section>
<section id="sess2">
<div class="sess2_description" data-anima="scroll">
  <h2><?= the_field('sess2_title') ?></h2>
  <p><?= the_field('sess2_subtitle') ?></p>
</div>
<div class='sess2_showcase'>
  <?php foreach ($data['sess2_showcase'] as $product) { ?>
    <a href="<?= $product['showcase_link'] ?>">
    <div class='sess2_showcase-wrapper' data-anima="scroll">
      <img src="<?= $product['showcase_image'] ?>" alt="<?= $product['showcase_name'] ?>">
      <div>
       <p ><?= $product['showcase_name'] ?></p>
       <p ><?= $product['showcase_description'] ?></p>
      </div>
    </div>
    </a>
  <?php } ?>
</div>
</section>
<article class=" brands_article" >
  <img src="<?= $image_url . '/tailor_lash.png' ?>" alt="brand-logo">
  <img src="<?= $image_url . '/stayve.png' ?>" alt="brand-logo">
  <img src="<?= $image_url . '/ribeskin.webp' ?>" alt="brand-logo">
  <img src="<?= $image_url . '/tailor_lash.png' ?>" alt="brand-logo">
  <img src="<?= $image_url . '/stayve.png' ?>" alt="brand-logo">
  <img src="<?= $image_url . '/ribeskin.webp' ?>" alt="brand-logo">
</article>
<section id="sess3" class="product-gallery"> 
<div class="product-title">
  <h2 ><?= the_field('sess3_title') ?></h2>
  <a href="<?= the_field('sess3_btn_link') ?>"><?= the_field('sess3_btn_label') ?></a>
</div>
<div>
  <?php bbglow_product_list($data['most_sales']) ?>
</div>
</section>
<section id="sess4" 
<?php 

$bg_img = get_field('sess4_bg_img');
$bg_img_url = $bg_img['url']

?>
style="
background: url('<?= $bg_img_url ?>');
background-position: center right;
background-repeat: no-repeat;
background-size: cover;
"
>
<div class="sess4_wrapper">
  <div class='sess4_content' data-anima="scroll">
    <h2><?=the_field('sess4_title'); ?></h2>
    <p><?=the_field('sess4_subtitle'); ?></p>
    <a class="shop_btn" href="<?=the_field('sess4_btn_link'); ?>"><?=the_field('sess4_btn_label'); ?></a>
  </div>
</div>
</section>
<section id="sess5">
<div class='sess5_img-wrapper'>
  <img class='sess5-img1'  src=" <?= the_field("sess5_img_1") ?>" alt="a group of diversity women" data-anima="scroll">
  <img class='sess5-img2' src=" <?= the_field("sess5_img_2") ?>" alt="" data-anima="scroll">
</div>
<div class="sess5_content-wrapper" data-anima="scroll">
  <div class="sess5_content-description">
    <h3 ><?= the_field("sess5_title") ?></h3>
    <p ><?= the_field("sess5_text") ?></p> 
  </div>
  <div class="sess5_adv-wrapper">
    <div class="sess5_adv">
      <img src="<?= $image_url . '/bag.svg' ?>" alt="">
      <div>
      <h4 >Trusted Seller</h4>
      <p >Trusted seller for quality beauty products.</p>
      </div>
    </div>
    <div class="sess5_adv">
      <img src="<?= $image_url . '/shield.svg' ?>" alt="">
      <div>
      <h4 >100% Secure</h4>
      <p >Purchasing from us is 100% secure for your peace of mind.</p>
      </div>
    </div>
  </div>
</div>
</section>
<section id="sess6" class="sess6 product-gallery"> 
<div class="product-title">
<h2 class="font-1-xl"><?= the_field('sess6_title') ?></h2>
  <a class="font-1-up-s" href="<?= the_field('sess6_btn_link') ?>"><?= the_field('sess6_btn_label') ?></a>
</div>
<div>
  <?php bbglow_product_list($data['home']) ?>
</div>
</section>
<section id="sess7"
<?php 
$sess7_bg_img = get_field('sess7_bg_img');
$sess7_bg_img_url = $sess7_bg_img['url']
?>
style="
background: url('<?= $sess7_bg_img_url ?>');
background-position: center;
background-repeat: no-repeat;
background-size: cover;
"
>
<div class="sess7_wrapper">
  <div class="sess7_content" data-anima="scroll">
    <h3 class="font-1-xl"><?= the_field('sess7_title') ?></h3>
    <a class='shop_btn' href="<?= the_field('sess7_btn_link') ?>"><?= the_field('sess7_btn_label') ?></a>
    </div>
  <div class="sess7_contact_wrapper">
  <div class='sess7_contact-box' data-anima="scroll">
  <img src="<?= $image_url . '/chat.svg' ?>" alt="icon">
  <h4 >Customer Support</h4>
  <p >Experience unparalleled customer support tailored to your needs.</p>
  <a class="shop_btn" href="tel:+16179555006">Call Us</a>
  </div>
  <div class='sess7_contact-box' data-anima="scroll">
  <img src="<?= $image_url . '/mail.svg' ?>" alt="icon">
  <h4 >Live Chat with our Team</h4>
  <p >Need assistance? Our chat support is here to help you in real-time.</p>
  <a class="shop_btn" id="chat_link" href="/chat">Click on chat icon</a>
  </div>
  <div class='sess7_contact-box' data-anima="scroll">
  <img src="<?= $image_url . '/file.svg' ?>" alt="icon">
  <h4 >Blog & Tutorials</h4>
  <p >Explore our insightful blogs for the latest trends and expert beauty advice.</p>
  <a class="shop_btn" href="/blog">check our blog</a>
  </div>
</div>

</div>
</section>
<section id="sess8">
  <div class="posts_title">
    <h2 class="font-1-xl"><?= the_field('sess8_title') ?></h2>
    <a class="font-1-up-s" href="<?= the_field('sess8_btn_link') ?>"><?= the_field('sess8_btn_label') ?></a>
  </div>
  <?php bbglow_post_list($data['posts'])  ?>
</section>
<?php get_footer(); ?>