<?php

namespace app\admin\controller;

use app\BaseController;
use think\facade\View;

class Base extends BaseController
{
    public $adminInfo = [];//当前登录用户信息

    //初始化数据
    public function initialize()
    {
        $this->adminInfo = is_login();
        if(!$this->adminInfo){
            return redirect((string) url('/login'));
        }
        View::assign('adminInfo',$this->adminInfo);
        return true;
    }
}