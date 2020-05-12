<?php

namespace app\admin\controller;

use think\facade\View;

class Order extends Base
{
    public function index()
    {
        return View::fetch();
    }
}