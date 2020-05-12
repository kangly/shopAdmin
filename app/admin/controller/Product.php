<?php

namespace app\admin\controller;

use app\admin\service\Upload;
use app\Request;
use think\facade\View;

class Product extends Base
{
    public function index()
    {
        return View::fetch();
    }

    public function productList(Request $request)
    {
        return View::fetch();
    }

    public function editProduct(Request $request)
    {
        return View::fetch();
    }

    public function saveProduct()
    {
        $data = new \app\admin\service\Product($this->app);
        echo $data->saveProduct();
    }

    public function deleteProduct(Request $request)
    {

    }

    public function uploadImg()
    {
        $image = new Upload($this->app);
        return $image->uploadImage();
    }
}