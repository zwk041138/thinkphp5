<?php
namespace app\index\controller;

use think\Collection;
use think\Controller;
use think\Request;
use think\url;
class index4 extends Controller {
    public function hello(){
        $request = Request::instance();
        echo  $request->url();//获取当前url地址不含域名
        echo "<br>";
        echo \request()->url();//获取当前url地址不含域名
        echo '<br>';
        echo \request()->bind('user_name','张三');
        echo '<br>';
        echo  \request()->user_name;
        /**
         * 请求变量的信息
         */
        print_r($request->param());
        echo "<br>";
        print_r($request->param('aaa'));
        echo "<br>";
        print_r(input());
        echo "<br>";
        print_r(input('aaa'));
        echo "<br>";
        /**
         * param方法支持变量的过滤和默认值
         */
        echo $request->param('bbb','jake',"strtolower");
        echo "<br>";
        /**
         * 指定获取参数
         */
        echo "========request========<br/>";
        echo 'get参数';
        print_r($request->get());
        echo "<br>";
        echo 'get参数name';
        print_r($request->get("aaa"));
        echo "<br>";
        echo 'post参数name';
        print_r($request->post("aaa"));
        echo "<br>";
        echo 'cookie参数name';
        print_r($request->cookie("aaa"));
        echo "========input========<br/>";
        echo 'get参数';
        print_r(input('get.'));
        echo "<br>";
        echo 'get参数name:';
        print_r(input('get.aaa'));
        echo "<br>";
        echo 'post参数name:';
        print_r(input('post.aaa'));
        echo "<br>";
        echo 'cookie参数name:';
        print_r(input('cookie.aaa'));
        echo "<br>";
        echo 'image参数name:';
        print_r(input('image.aaa'));
        echo "========request的其他参数========<br/>";
        echo '请求方法'.$request->method().'<br/>';
        echo "请求ip".$request->ip().'<br/>';
        echo '时候ajax请求：'.($request->isAjax()?'是':'否').'<br/>';
        echo '当前域名：'.$request->domain().'<br/>';
        echo '当前入口文件：'.$request->baseFile().'<br/>';
        echo '包含域名的完整url地址：'.$request->url(true).'<br/>';
        echo 'url地址参数信息'.$request->query().'<br/>';
        echo 'url地址不包含query_string'.$request->baseUrl().'<br/>';
        echo "url地址中的pathinfo".$request->pathinfo()."<br>";
        echo 'url的地址后缀信息'.$request->ext()."<br>";
        echo "========request当前模块/控制器/操作信息========<br/>";
        echo '模块：'.$request->module()."<br>";
        echo '控制器：'.$request->controller()."<br>";
        echo '方法：'.$request->action();
    }
    public function hello2(){
        $data = ["name"=>"thinkphp","status"=>'1'];
        //return json($data);
        //return xml($data);
//        $this->assign('name',"模板");
//        return $this->fetch('index/index');


    }
    public function hello3(){
       // $this->success("正确的页面跳转","hello");
       // $this->error("错误");
        $this->redirect("http://www.baidu.com");
    }
}