<?php
declare (strict_types = 1);

namespace app\admin\controller;

use think\facade\View;

class Index extends Base
{
    public function index()
    {
        return View::fetch();
    }

    public function systemInfo()
    {
        return View::fetch();
    }

    public function changePassword()
    {
        return View::fetch();
    }
}