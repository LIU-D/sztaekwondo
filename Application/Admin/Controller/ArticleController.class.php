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
            $article_summary = I('post.articlesummary');
            $article_model = D('Article');

            $data = array(
                'article_title' => $article_title,
                'article_author' => $article_author,
                'article_content' => $article_content,
                'article_summary' => $article_summary
            );
            if($article_model->add($data)){
                $this->success('添加文章成功！',U('index'),3);
            }else{
                echo "error";
                $this->error('添加文章失败！',U('addArticle'),3);
            }
        }else{
            $this->display();
        }
    }

    function editArticle(){
        $id = I('post.id');
        $article_info = D('Article')->find($id);
        $this->assign('article_info',$article_info);
        $this->display();
    }

    function stopArticle(){

        $article_model = D('Article');
        $data = array(
            'article_id' => I('post.id'),
            'article_isdel' => I('post.state'),
            'article_pubtime' =>I('post.time')
        );
        if($article_model->save($data)){
            $this->success('修改成功！',U('index'),3);
        }else{
            $this->error('修改失败！',U('index'),3);
        }  



        // if(I('post.state') == '未发布'){
        //     $date = date("Y-m-d H:i:s");
        //     $data = array(
        //         'article_id' => I('post.id'),
        //         'article_isdel' => I('post.state'),
        //         'article_pubtime' => $date
        //     );
        // }else{
        //     $data = array(
        //         'article_id' => I('post.id'),
        //         'article_isdel' => I('post.state'),
        //         'article_pubtime' => ''
        //     );
        // }
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

        //改变Ueditor 默认图片上传路径
    public function checkPic(){
            import('ORG.Net.UploadFile');
             $upload = new UploadFile();// 实例化上传类
             $upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
             $upload->autoSub =true ;
             $upload->subType ='date' ;
             $upload->dateFormat ='ym' ;
             $upload->savePath =  './Uploads/thumb/';// 设置附件上传目录
             if($upload->upload()){
                 $info =  $upload->getUploadFileInfo();
                 echo json_encode(array(
                   'url'=>$info[0]['savename'],
                   'title'=>htmlspecialchars($_POST['pictitle'], ENT_QUOTES),
                   'original'=>$info[0]['name'],
                   'state'=>'SUCCESS'
                 ));
              }else{
                 echo json_encode(array(
                  'state'=>$upload->getErrorMsg()
                 ));
                     }
            }

}