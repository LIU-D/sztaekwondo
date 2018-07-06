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
        if(IS_POST){
            $article_title = I('post.articletitle');
            $article_author = I('post.author');
            $article_content = I('post.article_content');
            $article_model = D('Article');

            $data = array(
                'article_title' => $article_title,
                'article_author' => $article_author,
                'article_content' => $article_content
            );
            if($article_model->add($data)){
                echo "success";
                $this->success('添加文章成功！',U('index'),3);
            }else{
                echo "error";
                $this->error('添加文章失败！',U('addArticle'),3);
            }
        }else{
            $this->display();
        }
    }

    function stopArticle(){

        $article_model = D('Article');
        $data = array(
            'article_id' => I('post.id'),
            'article_isdel' => I('post.state')
        );
        if($article_model->save($data)){
            $this->success('修改成功！',U('index'),3);
        }else{
            $this->error('修改失败！',U('index'),3);
        }  
    }

    function delArticle(){
        $id = I('post.id');
        $article_model = D('Article');
        if($article_model->delete($id)){
            $this->success('删除成功！',U('index'),3);
        }else{
                $this->error('删除失败！',U('index'),3);
        } 
    }




}