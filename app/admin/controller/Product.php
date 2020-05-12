<?php

namespace app\admin\controller;

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

    public function saveProduct(Request $request)
    {

    }

    public function deleteProduct(Request $request)
    {

    }
}