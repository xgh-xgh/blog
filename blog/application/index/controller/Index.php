<?php
namespace app\index\controller;
use think\Controller;
class Index extends Controller
{
    public function index()
    {

        $data= model('Releases')->dataByStatus();
        //var_dump($data);exit;
        return $this->fetch('',[
           'data'=>$data,
        ]);
    }



}
