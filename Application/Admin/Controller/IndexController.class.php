<?php
namespace Admin\Controller;
use Think\Controller;
use Think\Verify;
class IndexController extends Controller {
    public function index(){
        $this->display();
    }

    function verify(){
        //自定义配置项
        $config = array(
//            'useCurve'  =>  false,            // 是否画混淆曲线
            'useNoise'  =>  false,            // 是否添加杂点
            'length'    =>  4,               // 验证码位数
            'fontSize'  =>  17,             // 验证码字体大小(px)
            'bg'        =>  array(247, 247, 247)  // 背景颜色
        );
        //1.实例化验证码类
        $verify = new verify($config);
        //2.调用entry方法绘制验证码
        $verify->entry();
    }

    function check(){
        //1.接收表单提交的验证码
        $code = I('post.code');

        //2.用户输入的验证码和系统产生的是否一致
        //实例化验证码类
        $v = new Verify();
        //调用Verify的check方法，检测验证码    属性：用户输入的验证码（表单提交过来的）
        if (!($v->check($code))){
            $this->error('您输入的验证码不正确，请重新输入！',U('index'),3);
        }else{
            //3.接收表单提交的用户名和密码
            $name = I('post.username');
            $psw = md5(I('post.password'));

            //4.实例化Users模型
            $users_model = D('Users');

            //5.调用UsersModel中的checkLogin方法检测用户和密码是否正确
            //如果正确返回true，反之返回false
            if ($users_model->checkLogin($name,$psw)){
                $this->success('登陆成功！',U('Main/index'),3);
            }else{
                $this->error('用户名或密码错误，请重新登录！',U('index'),3);
            }
        }
    }

    function logout(){
        //清除session
        session(null);
        $this->success('退出登录成功！',U('index'),3);
    }
}