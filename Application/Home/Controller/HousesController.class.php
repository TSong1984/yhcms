<?php

namespace Home\Controller;

class HousesController extends \Think\Controller {
    
    public function lines(){
        $m = M('Houses');
        $data = $m->select();
        $this->assign('data', $data);
        $this->display();
    }

    public function form() {
        $this->display();
    }

    public function add() {
        $m = M('Houses');
        $i = 0;
        foreach($_POST as $k => $v){
            if(empty($v)){
                $i++;
                continue;
            }
        }
        
        if ($i==0 && $m->add($_POST)) {
            $this->success('添加成功', '', 1);
        } else {
            $this->error('添加失败');
        }
    }

}
