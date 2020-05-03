<?php

namespace app\admin\controller;

use app\BaseController;
use app\Request;
use app\admin\model\Admin;
use think\facade\Config;
use think\facade\Session;
use think\facade\View;

class Login extends BaseController
{
    public function index()
    {
        if(is_login()){
            return redirect((string) url('/index'));
        }

        return View::fetch();
    }

    public function login(Request $request)
    {
        if(is_login()){
            return 'success';
        }

        if(request()->isPost())
        {
            $username = $request->param('username');
            $password = $request->param('password');
            $admin = new Admin();
            $admin_data = $admin->login($username,$password);
            if(!$admin_data){
                return $admin->getError();
            }else{
                $admin_data = $admin_data->toArray();
            }

            $save_data = [
                'login_ip'=>request()->ip(),
                'login_time'=>_time()
            ];
            $admin->where('id','=',$admin_data['id'])->update($save_data);

            $admin->autoLogin(array_merge($admin_data,$save_data));

            return 'success';
        }
        else
        {
            return '非法操作！';
        }
    }

    /**
     * 退出登录
     */
    public function logout()
    {
        $this->clearCache();
        return redirect((string) url('/login'));
    }

    /**
     * 清空登录session
     */
    public function clearCache()
    {
        if(is_login()){
            Session::clear(Config::get('session.prefix'));
        }
    }
}