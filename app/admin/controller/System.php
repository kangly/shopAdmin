<?php

namespace app\admin\controller;

use think\facade\View;

class System extends Base
{
    public function index()
    {
        return View::fetch();
    }
}