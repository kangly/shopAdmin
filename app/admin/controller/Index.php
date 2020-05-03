<?php
declare (strict_types = 1);

namespace app\admin\controller;

use think\facade\View;

class Index extends Base
{
    public function index()
    {
        dump($this->adminInfo);

        return View::fetch();
    }
}
