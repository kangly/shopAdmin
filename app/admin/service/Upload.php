<?php

namespace app\admin\service;

class Upload
{
    /**
     * ckeditor上传图片，暂时未做限制
     * @return \think\response\Json
     */
    public function uploadImage()
    {
        $files = request()->file();
        try {
            $save_name = [];
            foreach($files as $file){
                $save_name[] = 'http://admin.my.shop/storage/'.\think\facade\Filesystem::putFile( 'images', $file);
            }
            $msg['uploaded'] = true;
            $msg['url'] = $save_name;
            return json($msg);
        } catch (\Exception $e) {
            //echo $e->getMessage();
            $msg['uploaded'] = false;
            $msg['url'] = '';
            return json($msg);
        }
    }
}