<?php
namespace app\index\controller;

use think\Collection;
use think\url;
class Index extends  Collection
{
    public function index()
    {
        return "今天是：".date("Y-m-d H:i:s");
    }
    public function hello($name=''){
        echo "hell0:".$name;
       // return "今天是：".date("Y-m-d H:i:s");
       print_r(request()->param());

    }
    public function today($year,$month){
        echo "今天是".$year."年".$month."月";
    }
    public function url(){
        echo Url::build('url2','a=1&b=2');
        echo "<br>";
        echo url('url2','a=1&b=2');
        echo '<br>';
        echo url('url2',['a'=>1,'b'=>2]);
        echo '<br>';
        echo url('url2',array('a'=>1,'b'=>2));
        echo '<br>';
        echo url('admin/index2/url2/','a=1&b=2');
        echo '<br>';
        echo url('admin/HelloWorld/hello'); //自动转换 url_convert
        echo '<br>';
        echo url('today/2017/07');//路由规则
        echo '<br/>';
    }
}
