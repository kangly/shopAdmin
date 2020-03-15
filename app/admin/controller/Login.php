<?php

namespace app\admin\controller;

use app\BaseController;
use app\Request;
use think\facade\View;

class Login extends BaseController
{
    public function index(Request $request)
    {
        return View::fetch();
    }

    public function login(Request $request)
    {
        echo 'success';
    }
}