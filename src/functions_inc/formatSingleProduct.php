<?php
function bbglow_format_single_product($id, $img_size='medium') {
  $product = wc_get_product($id);
  $gallery_ids = $product->get_gallery_attachment_ids();
  $gallery = [];

  if($gallery_ids) {
    foreach($gallery_ids as $img_id) {
      $gallery = wp_get_attachment_image_src($img_id, 'medium')[0];
    }
  }
  return [
    'id' => $id,
    'name' => $product->get_name(),
    'regular-price' => $product->get_regular_price(),
    'sell-price' => $product->get_sale_price(),
    'link' => $product->get_permalink(), 
    'sku'=> $product->get_sku(),
    'description' => $product->get_description(),
    'img' => wp_get_attachment_image_src($product->get_image_id(), 'medium')[0],
    'gallery' => $gallery,
  ];
}
?>