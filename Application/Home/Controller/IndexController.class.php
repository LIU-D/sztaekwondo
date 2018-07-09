<?php
namespace Home\Controller;
use Think\Controller;
use Think\Verify;
class IndexController extends Controller {
    public function index(){
        $article_model = D('Article');
        $img_model = D('Image');

        $article_list = $article_model
            ->where('article_isdel = "已发布"')
            ->select();
        $this->assign('article_list',$article_list);

        $slide_list = $img_model
            ->where('img_typeid = 1 and img_isdel = "已发布"')
            ->select();
        $this ->assign('slide_list',$slide_list);

        $showbox_list = $img_model
            ->where('img_typeid = 2 and img_isdel = "已发布"')
            ->select();
        $this ->assign('showbox_list',$showbox_list);

        $member_list = $img_model
            ->where('img_typeid = 3 and img_isdel = "已发布"')
            ->select();
        $this ->assign('member_list',$member_list);
        $this->display();
    }

    public function showList(){
        $article_model = D('Article');
        $article_list = $article_model
            ->where('article_isdel = "已发布"')
            ->select();
        $this->assign('article_list',$article_list);
        $this->display();
    }

    public function article(){
        $id = I('get.id');
        $article_list = D('Article')->find($id);
        $this->assign('article_list',$article_list);
        $this->display();
    }

    public function about(){
        $img_model = D('Image');
        $member_list = $img_model
            ->where('img_typeid = 3 and img_isdel = "已发布"')
            ->select();
        $this ->assign('member_list',$member_list);

        $this->display();
    }

    public function error404(){
        $this->display();
    }
}