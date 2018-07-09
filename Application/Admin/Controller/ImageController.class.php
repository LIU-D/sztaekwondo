<?php
namespace Admin\Controller;
use Think\Upload;
use Think\Image;


class ImageController extends CommonController {
    public function index(){
         $this->display();
    }
    public function addImage(){
        $type_list = D('Imgtype') -> select();
        $this->assign('type_list',$type_list);

        $this->display();
}
    public function addOk(){
//        $this->display();
        //1.文件上传
        //定义文件上传配置项
        $config = array(
            'maxSize' => 3000000,
            'exts'    => array('jpg','png','gif'),
            'rootPath'=> './Upload/'
        );
        //实例化文件上传类，并将配置项作为参数传入
        $uploader = new Upload($config);
        //调用upload方法上传文件
        //上传成功，返回上传信息（二维数组），反之，返回false
        $upload_result = $uploader->upload();
        //判断上传返回值
        if (!$upload_result){
            //如果上传失败，则输出错误信息
            echo $uploader->getError();
        } else{
            //2.如果上传成功，则制作对应的缩略图
            //实例化image类
            $img = new Image();
            //打开刚上传的图片
            $logo = $config['rootPath'].$upload_result['f']['savepath']
                .$upload_result['f']['savename'];
            $img ->open($logo);
            //调用thumb方法制作缩略图
            $img ->thumb(290,290);
            //将缩略图保存
            $small_logo = $config['rootPath'].$upload_result['f']['savepath'].'thumb_'.$upload_result['f']['savename'];
            $img -> save($small_logo);
        }
        //3.接收表单的其他数据，并构造要写入数据表的数据
        $data = array(
            'img_title' => I('post.name'),
            'img_logo' => $logo,
            'img_small_logo' => $small_logo,
            'img_typeid' => I('type_id')
        );

        //4.实例化Image模型，调用add方法将数据写入Image表
        if (D('Image')->add($data)){
            $this ->success('添加图片成功！',U('listSlide'),3);
        } else {
            $this -> error('添加图片失败',U('addImage'),3);
        }

    }

    function listSlide(){
        $image_model = D('Image');
        $list_slide = $image_model
            ->alias('img')
            ->field('img_id,type_name,img_small_logo,img_title,img_isdel,img_pubtime,img_addtime')
            ->join('sz_imgtype t on img.img_typeid = type_id')
            ->where('img_typeid = 1')
            ->select();
        $this->assign('list_slide',$list_slide);

        $this->display();
    }

    function listShowbox(){
        $image_model = D('Image');
        $list_slide = $image_model
            ->alias('img')
            ->field('img_id,type_name,img_small_logo,img_title,img_isdel,img_pubtime,img_addtime')
            ->join('sz_imgtype t on img.img_typeid = type_id')
            ->where('img_typeid = 2')
            ->select();
        $this->assign('list_slide',$list_slide);

        $this->display();
    }

    function listMember(){
        $image_model = D('Image');
        $list_slide = $image_model
            ->alias('img')
            ->field('img_id,type_name,img_small_logo,img_title,img_isdel,img_pubtime,img_addtime')
            ->join('sz_imgtype t on img.img_typeid = type_id')
            ->where('img_typeid = 3')
            ->select();
        $this->assign('list_slide',$list_slide);

        $this->display();
    }

    function delImage(){
        //1.接收cate_id
        $id = I('post.id');// $_GET['id'];
        //2.实例化Image模型
        $img_model = D('Image');
        //3.调用delete删除数据
//        $cate_model->delete($id);
        if ($img_model->delete($id)){
            $this->success('删除商品分类成功',U('index'),3);
        }else{
            $this->error('删除商品分类失败',U('index'),3);
        }
    }


    function stopImage(){
        $img_model = D('Image');
        $data = array(
            'img_id' => I('post.id'),
            'img_isdel' => I('post.state'),
            'img_pubtime' =>I('post.time')
        );
        if($img_model->save($data)){
            $this->success('修改成功！',U('index'),3);
        }else{
            $this->error('修改失败！',U('index'),3);
        }
    }

}