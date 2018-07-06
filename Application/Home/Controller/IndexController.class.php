<?php
namespace Home\Controller;
use Think\Controller;
use Think\Verify;
class IndexController extends Controller {
    public function index(){
        $article_model = D('Article');
        $article_list = $article_model->select();
        $this->assign('article_list',$article_list);
        $this->display();
    }

    public function showList(){
        $article_model = D('Article');
        $article_list = $article_model->select();
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
        $this->display();
    }

    public function error404(){
        $this->display();
    }
}