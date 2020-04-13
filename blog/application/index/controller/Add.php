<?php
namespace app\index\controller;
use think\Controller;
class Add extends Controller
{
   public function index(){
        return $this->fetch();
   }

   public function add(){
       if(request()->isPost()) {

           $data = input('post.');

           $id = model('Releases')->add($data);
           if ($id) {
               $this->success('添加成功');
           } else {
               $this->error('添加失败');
           }
       }else{
           return $this->fetch();
       }

   }
}
