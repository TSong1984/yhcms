<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $m = M('users','');
        $arr = $m->select();
        var_dump($arr);
    }
}