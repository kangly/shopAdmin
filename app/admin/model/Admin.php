<?php

namespace app\admin\model;

use think\Model;

class Admin extends Model
{
    protected $error = ''; //错误信息

    /**
     * 管理员登录验证
     * @param $username
     * @param $password
     * @return array|bool|Model|null
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\DbException
     * @throws \think\db\exception\ModelNotFoundException
     */
    public function login($username,$password)
    {
        $map = [
            ['state','=',0],
            ['username','=',$username]
        ];

        $admin = $this->where($map)->find();
        if (!$admin) {
            $this->error = '用户不存在或被禁用！';
        } else {
            if (md5($password) !== $admin['password']) {
                $this->error = '密码错误！';
            } else {
                return $admin;
            }
        }

        return false;
    }

    /**
     * 检测用户是否已登录
     * @return bool|mixed
     */
    public function isLogin()
    {
        $admin = session('admin_auth');
        if (empty($admin)) {
            return false;
        } else {
            return $admin;
        }
    }

    /**
     * 设置登录session
     * @param $admin
     * @return bool|mixed
     */
    public function autoLogin($admin)
    {
        session('admin_auth', $admin);
        return $this->isLogin();
    }

    /**
     * 获取错误信息
     * @return string
     */
    public function getError()
    {
        return $this->error;
    }
}