<?php
namespace Home\Controller;
use Think\Controller;
use Think\Verify;
class IndexController extends Controller {
    public function index(){
        $this->display();
    }

    public function showList(){
        $this->display();
    }

    public function article(){
        $this->display();
    }

    public function about(){
        $this->display();
    }

    public function error404(){
        $this->display();
    }
}