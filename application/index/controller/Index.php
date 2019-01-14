<?php
namespace app\index\controller;

use think\Collection;
use think\Db;
use think\Exception;
use think\Request;
use think\url;
class Index extends  Collection
{
    /**
     * 查询语言
     */
    public function cx(){
        echo "cx";
        $result = Db::name('data')->where('id',4)->find();
        $result2 = Db::name('data')->insert(['name'=>'thinkphp','status'=>1]);
        var_dump($result);
        var_dump($result2);
    }
    /**
     * 事务
     */
    public function sw(){
        echo "sw";
      // dump(Db::table('tp_data')->delete(2));
        /**
         * 自动完成
         */
//       Db::transaction(function (){
//           Db::table('tp_data')->delete(2);
//           Db::table('tp_data')->insert(['name'=>'thinkphp','status'=>1]);
//       });
        /**
         * 手动完成
         */
//        Db::startTrans();
//        try{
//            Db::table('tp_data')->delete(2);
//            Db::table('tp_data')->insert(["id"=>8,'name'=>'thinkphp','status'=>1]);
//            //事务提交
//            Db::commit();
//        }catch(Exception $e){
//            //事务回滚
//            echo '事务回滚';
//            Db::rollback();
//        }
    }
    public function sql(){
        $result = Db::execute('insert into tp_data(name,status) values ("1111",1)');
        dump($result);
    }
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
