<?php

namespace app\index\controller;

use think\Controller;
use think\Request;

class Req extends Controller
{
    //实例化Request对象
    public function index(Request $request){
        //使用全局的request类实例化使用
        dump("当前方法所在的模块：".$request->module());
        //request::instance()
        $request = $request::instance();
        dump("当前方法所在的模块：".$request->module());
        //助手方法request（）
        dump(request()->module());
    }
    //获取模块控制器方法名称
    public function getbc(){
       //
        dump(request()->controller()."/".request()->action());
    }
    //获取url的相关信息
    public function getUrlInfo(){
        dump("当前的域名：".\request()->domain());
        dump("当前的URL地址：".\request()->url());
        dump("完整的url地址".\request()->url(true));
    }
    //请求的检测req
    public function checkReq(){
        if (\request()->has("name","get"))
        {
            echo "1";
        }
        else{
            echo "2";
        }
    }
}