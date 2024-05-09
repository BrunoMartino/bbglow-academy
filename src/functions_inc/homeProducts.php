<?php 
function format_products($products, $img_size = "medium") {
  $products_final = [];
  foreach ($products as $product) {
    $product_img = wp_get_attachment_image_src($product->get_image_id(), $img_size)[0];
    $products_final[] = [
      'name' => $product->get_name(),
      'link' => $product->get_permalink(),
      'regular-price' => number_format($product->get_regular_price(), 2),
      'sell-price'=> number_format($product->get_price(), 2),
      'img' => $product_img
    ];
  }
  return $products_final;
}
?>
<?php 
function bbglow_product_list($products) {
?>
<nav class="product_nav">
<ul class="product_list">
<?php foreach($products as $product) { ?>
<li class="product_list-item">
<a href="<?= $product['link'] ?>">
  <span class="sales_tag">Sale!</span>
    <img src="<?= $product['img'] ?>" alt="<?= $product['name'] ?> ">
  <div class="product_list-item-info">
    <h4> <?= $product['name'] ?> </h4>
    <p class="reg-price" > $ <?= $product['regular-price'] ?> </p>
    <p class=" sell-price" > $ <?= $product['sell-price'] ?> </p>
    <p class=" shop_btn" > buy now</p>
  </div>
</a>
</li>
<?php } ?>
  </ul>
  </nav>
<?php } ?>