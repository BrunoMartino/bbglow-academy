<?php
add_action('wp_ajax_filter_products', 'filter_products');
add_action('wp_ajax_nopriv_filter_products', 'filter_products');

function filter_products() {
    $filter = $_GET['filter'];
    $products = array();

    if ($filter === 'newest') {
        $products = wc_get_products(array(
            'limit' => 9,
            'orderby' => 'date',
            'order' => 'DESC',
            'stock_status' => 'instock'
        ));
        $products = format_products($products);
    } elseif ($filter === 'most_sales') {
        $products = wc_get_products(array(
            'limit' => 9,
            'orderby' => 'meta_value_num',
            'order' => 'DESC',
            'meta_key' => 'total_sales',
            'stock_status' => 'instock'
        ));
        $products = format_products($products);
    } elseif ($filter === 'alphabetical') {
        $products = wc_get_products(array(
            'limit' => 9, 
            'orderby' => 'title', 
            'order' => 'ASC', 
            'stock_status' => 'instock'
        ));
        $products = format_products($products);
    }

    $products_html = bbglow_product_list($products);
    echo $products_html;

    wp_die();
}
