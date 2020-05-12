<?php

namespace app\admin\controller;

use think\facade\View;

class User extends Base
{
    public function index()
    {
        return View::fetch();
    }

    public function userList()
    {
        return View::fetch();
    }
}