<?php
namespace app\index\model;

use think\Model;

class Data extends Model
{
   //name读取器
    protected  function getNameAttr($a,$data2){
        return "your name:".$a.'and your password'.$data2['status'];
    }
    //name修改器
    protected function setNameAttr($value){
        return 'bbbb';
    }

}