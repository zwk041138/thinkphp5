<?php

namespace app\index\controller;

use think\Request;

class Error{
    /**
     * @param Request $request
     * @return string
     */
    public function index(Request $request){
        return "你访问的：".$request->controller()."不存在";
    }
}