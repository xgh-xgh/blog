<?php


namespace app\common\model;
use think\Model;

class Releases extends Model
{
    protected $autoWriteTimestamp = true; //自动写入时间戳

    public function add($data)
    {
        $data['status'] = 0;
        //$data['create_time'] = time();
        $this->save($data);
        return $this->id;
    }

    //通过状态查询
    public function dataByStatus(){
        $data = [
            ['status','=','0']
        ];

        $order = ['id'=>'desc'];
        $result = $this->where($data)->order($order)->paginate();
        //print_r($result);exit;
        return $result;
    }

}
