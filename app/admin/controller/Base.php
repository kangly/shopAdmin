<?php

namespace app\admin\controller;

use app\BaseController;
use think\exception\HttpResponseException;
use think\facade\View;

class Base extends BaseController
{
    public $adminInfo = [];//当前登录用户信息

    //初始化数据
    protected function initialize()
    {
        parent::initialize();

        $this->adminInfo = is_login();
        if(!$this->adminInfo){
            return $this->redirectTo((string) url('/login'));
        }
        View::assign('adminInfo',$this->adminInfo);
        return true;
    }

    /**
     * 自定义重定向方法
     * @param mixed ...$args
     */
    protected function redirectTo(...$args)
    {
        throw new HttpResponseException(redirect(...$args));
    }
}