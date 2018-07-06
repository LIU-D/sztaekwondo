<?php
namespace Admin\Controller;
use Think\Controller;
class ArticleController extends Controller {
    public function index(){
        $article_model = D('Article');
        $article_list = $article_model->select();
        $this->assign('article_list',$article_list);
        $this->display();
    }
    public function addArticle(){
        $this->display();
    }

    function delArticle(){
        $article_model = D('Article');
        $data = array(
            'article_id' => I('get.id'),
            'article_isdel' => I('get.state')
        );
        if($article_model->save($data)){
            $this->success('修改成功！',U('index'),3);
        }else{
            $this->error('修改失败！',U('index'),3);
        }  
    }
}