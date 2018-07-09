<?php
/**
 * Created by PhpStorm.
 * User: Miss Zheng
 * Date: 2018/7/7
 * Time: 11:56
 */

namespace Admin\Controller;


use Think\Controller;

class CommonController extends Controller
{
    function _initialize(){
        if (!session('?id')){
            $this->error('您尚未登录，请登录后再进行访问！',U('Index/index'),3);
        }
    }
}