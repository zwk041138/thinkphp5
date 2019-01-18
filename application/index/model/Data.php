<?php
namespace app\index\model;

use think\Model;

class Data extends Model
{
    //查询范围

    //status自动查询
    protected function scopeStatus($query){
        $query->where('status','127');
    }
    protected function scopeSex($query){
        $query->where('sex','2');
    }
    //全局查询
    protected static  function  base($query){
        $query->where('id',10);
    }
    //类型转换
//    protected  $type = array(
//        'birthday'=>'timestamp:Y-m-d',
//    );
    //自动完成 insert update auto
    protected $update = array(
        'status'=> 2,
    );
   //name读取器
    protected  function getNameAttr($a,$data2){
        return "your name:".$a.'and your password'.$data2['status'];
    }
    //name修改器
    protected function setNameAttr($value){
        return 'bbbb';
    }
    //sex属性修改器
//    protected function  setSexAttr($value,$data){
//        return $data['head_pic'] == "boy.jpg"?1:0;
//    }

}