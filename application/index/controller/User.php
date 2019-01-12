<?php

namespace app\index\controller;

use think\Controller;
use think\Request;

class User extends Controller
{
   protected $beforeActionList = [
       "init",
       "checkLogin" => ['except'=>'login'],
       'onlyindex' =>['only'=>'index'],
   ];
    public function init(){
        echo "init<br>";
    }
    //空方法
    public function _empty($name=""){
        echo "你访问的".$name."方法不存在";
    }
    //index的前置方法
    public function onlyindex(){
        echo "indonlyindexex<br>";
    }

    public  function _initialize()
    {
        echo "_initialize<br>";
    }
    public function login(){
        return "login";
    }
    public function checkLogin(){
        return "checkLogin<br>";
    }
    public function index()
    {
        //
        return "index<br>";
    }

    public function  getUserInfo(){
        return "index/getUserInfo";
    }
}
