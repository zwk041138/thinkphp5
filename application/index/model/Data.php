<?php
namespace app\index\model;

use think\Model;

class Data extends Model
{
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