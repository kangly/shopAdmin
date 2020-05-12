<?php

namespace app\admin\service;

class Product
{
    public function saveProduct()
    {
        $product_id = request()->param('id');
        $product_title = request()->param('title');
        $product_image = request()->file('product_image');
        $product_desc = request()->file('desc');
        $is_sale = request()->file('is_sale');
        $sku_json = request()->file('sku_json');

        return $product_id;
    }
}