<?php

namespace app\admin\controller;

use app\BaseController;
use app\Request;
use think\facade\View;

class Login extends BaseController
{
    public function index()
    {
        return View::fetch();
    }

    public function login(Request $request)
    {
        $username = $request->param('username');
        $password = $request->param('password');

        echo 'success';
    }
}