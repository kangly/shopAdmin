<?php
// 这是系统自动生成的公共文件

/**
 * 检测是否登录
 * @return mixed
 */
function is_login(){
    $admin = new \app\admin\model\Admin();
    return $admin->isLogin();
}