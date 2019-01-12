<?php
namespace app\index\controller;

use think\console\output\Formatter;

class Index
{
    public function index()
    {
        return "今天是：".date("Y-m-d H:i:s");
    }
}
